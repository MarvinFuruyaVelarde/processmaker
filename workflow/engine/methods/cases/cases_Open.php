<?php
/**
 * cases_Open.php
 *
 * ProcessMaker Open Source Edition
 * Copyright (C) 2004 - 2008 Colosa Inc.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * For more information, contact Colosa Inc, 2566 Le Jeune Rd.,
 * Coral Gables, FL, 33134, USA, or email info@colosa.com.
 *
 */

/* Permissions */
if( $RBAC->userCanAccess('PM_CASES') != 1 ) {
  switch( $RBAC->userCanAccess('PM_CASES') ) {
    case - 2:
      G::SendTemporalMessage('ID_USER_HAVENT_RIGHTS_SYSTEM', 'error', 'labels');
      G::header('location: ../login/login');
      break;
    case - 1:
    default:
      G::SendTemporalMessage('ID_USER_HAVENT_RIGHTS_PAGE', 'error', 'labels');
      G::header('location: ../login/login');
      break;
  }
}

/* Includes */
require_once 'classes/model/AppDelay.php';
G::LoadClass('case');

$oCase = new Cases();

//cleaning the case session data
Cases::clearCaseSessionData();

/**
 * this rutine validate the content=inner, if this parameter is not passed as parameter
 * it assume that is a request from a direct link like "...sysos/en/green/cases/cases_Open?APP_UID=8657855064c913c5ecdef30003851716&DEL_INDEX=2"
 * and this will be redirected, this cause that the application form will be loaded on side main frame therefor the form
 * will be loaded with the main menu and the left menu of cases
 */

if( ! isset($_GET['content']) || $_GET['content'] != "inner" ) {
  $tmp = explode(PATH_SEP, $_SERVER['REDIRECT_URL']);
  if( count($tmp) > 1 ) {
    $_SESSION['cases_url'] = $tmp[count($tmp) - 1] . '?' . $_SERVER['QUERY_STRING'];
    $G_PUBLISH = new Publisher();
    $oHeadPublisher = & headPublisher::getSingleton();
    $oHeadPublisher->addScriptCode("parent.window.location.href ='main'");
    G::RenderPage('publish', 'raw');
    die();
  }
}



try {
  //Loading data for a Jump request
  if( ! isset($_GET['APP_UID']) && isset($_GET['APP_NUMBER']) ) {
    $_GET['APP_UID']   = $oCase->getApplicationUIDByNumber($_GET['APP_NUMBER']);
    $_GET['DEL_INDEX'] = $oCase->getCurrentDelegation($_GET['APP_UID'], $_SESSION['USER_LOGGED']);

    //if the application doesn't exist
    if( is_null($_GET['APP_UID']) ) {
      G::SendMessageText(G::LoadTranslation('ID_CASE_DOES_NOT_EXISTS'), 'info');
      G::header('location: casesListExtJs');
      exit;
    }

    //if the application exists but the
    if( is_null($_GET['DEL_INDEX']) ) {
      G::SendMessageText(G::LoadTranslation('ID_CASE_IS_CURRENTLY_WITH_ANOTHER_USER'), 'info');
      G::header('location: casesListExtJs');
      exit;
    }
    //wrong implemented, need refactored
    //$participated = $oCase->userParticipatedInCase($_GET['APP_UID'], $_SESSION['USER_LOGGED']); ???????
  }

  $sAppUid   = $_GET['APP_UID'];
  $iDelIndex = $_GET['DEL_INDEX'];

  //loading application data
  $aFields = $oCase->loadCase($sAppUid, $iDelIndex);


  switch($aFields['APP_STATUS']){
    case 'DRAFT':
    case 'TO_DO':
      //check if the case is in pause, check a valid record in table APP_DELAY
      if( AppDelay::isPaused($sAppUid, $iDelIndex) ) {
        //the case is paused show only the resume
        $_SESSION['APPLICATION']   = $sAppUid;
        $_SESSION['INDEX']         = $iDelIndex;
        $_SESSION['PROCESS']       = $aFields['PRO_UID'];
        $_SESSION['TASK']          = -1;
        $_SESSION['STEP_POSITION'] = 0;

        require_once (PATH_METHODS . 'cases' . PATH_SEP . 'cases_Resume.php');
        exit;
      }

      //proceed and try to open the case
      $oAppDelegation = new AppDelegation();
      $aDelegation    = $oAppDelegation->load($sAppUid, $iDelIndex);

      //if there are no user in the delegation row, this case is in selfservice
      if( $aDelegation['USR_UID'] == "" /*&& $aDelegation['DEL_THREAD_STATUS'] == 'SELFSERVICE'*/ ) {

        $_SESSION['APPLICATION']   = $sAppUid;
        $_SESSION['INDEX']         = $iDelIndex;
        $_SESSION['PROCESS']       = $aFields['PRO_UID'];
        $_SESSION['TASK']          = -1;
        $_SESSION['STEP_POSITION'] = 0;

        //if the task is in the valid selfservice tasks for this user, then catch the case, else just view the resume
        if( $oCase->isSelfService($_SESSION['USER_LOGGED'], $aFields['TAS_UID']) ) {
          require_once (PATH_METHODS . 'cases' . PATH_SEP . 'cases_CatchSelfService.php');
        } else
          require_once (PATH_METHODS . 'cases' . PATH_SEP . 'cases_Resume.php');

        exit;
      }

      //if the current users is in the AppDelegation row, then open the case
      if( ($aDelegation['USR_UID'] == $_SESSION['USER_LOGGED']) && $_SESSION['CASES_MENU_OPTION'] != 'sent' ) {
        $_SESSION['APPLICATION'] = $sAppUid;
        $_SESSION['INDEX']       = $iDelIndex;

        if( is_null($aFields['DEL_INIT_DATE']) ) {
          $oCase->setDelInitDate($sAppUid, $iDelIndex);
          $aFields = $oCase->loadCase($sAppUid, $iDelIndex);
        }

        $_SESSION['PROCESS']       = $aFields['PRO_UID'];
        $_SESSION['TASK']          = $aFields['TAS_UID'];
        $_SESSION['STEP_POSITION'] = 0;

        /* Redirect to next step */
        unset($_SESSION['bNoShowSteps']);
        $aNextStep = $oCase->getNextStep($_SESSION['PROCESS'], $_SESSION['APPLICATION'], $_SESSION['INDEX'], $_SESSION['STEP_POSITION']);
        $sPage = $aNextStep['PAGE'];

        G::header('location: ' . $sPage);

      } else {
        //when the case have another user or current user doesnt have rights to this selfservice,
        //just view the case Resume
        $_SESSION['APPLICATION']   = $sAppUid;
        $_SESSION['INDEX']         = $iDelIndex;
        $_SESSION['PROCESS']       = $aFields['PRO_UID'];
        $_SESSION['TASK']          = -1;
        $_SESSION['STEP_POSITION'] = 0;
        require_once (PATH_METHODS . 'cases' . PATH_SEP . 'cases_Resume.php');
      }
    break;

    default: //APP_STATUS <> DRAFT and TO_DO
      $_SESSION['APPLICATION']   = $sAppUid;
      $_SESSION['INDEX']         = $iDelIndex != "" ? $iDelIndex : $oCase->getCurrentDelegationCase($_GET['APP_UID']);
      $_SESSION['PROCESS']       = $aFields['PRO_UID'];
      $_SESSION['TASK']          = -1;
      $_SESSION['STEP_POSITION'] = 0;

      require_once (PATH_METHODS . 'cases' . PATH_SEP . 'cases_Resume.php');
  }
} catch( Exception $e ) {
  $aMessage = array ();
  $aMessage['MESSAGE'] = $e->getMessage();
  $G_PUBLISH = new Publisher();
  $G_PUBLISH->AddContent('xmlform', 'xmlform', 'login/showMessage', '', $aMessage);
  G::RenderPage('publishBlank', 'blank');
}
