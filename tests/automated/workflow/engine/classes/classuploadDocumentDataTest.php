<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'workflow/engine/classes/class.plugin.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:32.
*/

class classuploadDocumentDataTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var uploadDocumentData
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $sApplicationUid = '';
        $sUserUid        = '';
        $sFilename       = '';
        $sFileTitle      = '';
        $sDocumentUid    = '';
        $this->object    = new uploadDocumentData($sApplicationUid,
            $sUserUid, $sFilename, $sFileTitle, $sDocumentUid);

    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
    */
    protected function tearDown()
    {
    }

    /**
     * This is the default method to test, if the class still having
     * the same number of methods.
    */
    public function testNumberOfMethodsInThisClass()
    {
        $methods = get_class_methods('uploadDocumentData');
        $this->assertTrue( count($methods) == 1);
    }

    /**
    * @covers uploadDocumentData::__construct
    * @todo   Implement test__construct().
    */
    public function test__construct()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('__construct', $methods ), 'exists method __construct' );
        $r = new ReflectionMethod('uploadDocumentData', '__construct');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'sApplicationUid');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
        $this->assertTrue( $params[1]->getName() == 'sUserUid');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == false);
        $this->assertTrue( $params[2]->getName() == 'sFilename');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == false);
        $this->assertTrue( $params[3]->getName() == 'sFileTitle');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == false);
        $this->assertTrue( $params[4]->getName() == 'sDocumentUid');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == false);
        $this->assertTrue( $params[5]->getName() == 'iVersion');
        $this->assertTrue( $params[5]->isArray() == false);
        $this->assertTrue( $params[5]->isOptional () == true);
        $this->assertTrue( $params[5]->getDefaultValue() == '1');
    }

  }
