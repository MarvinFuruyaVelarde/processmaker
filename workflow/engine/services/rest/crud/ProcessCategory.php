<?php

class Services_Rest_ProcessCategory
{
    /**
     * Implementation for 'GET' method for Rest API
     *
     * @param  mixed $categoryUid Primary key
     *
     * @return array $result Returns array within multiple records or a single record depending if
     *                       a single selection was requested passing id(s) as param
     */
    protected function get($categoryUid=null)
    {
        $result = array();
        try {
            if (func_num_args() == 0) {
                $criteria = new Criteria('workflow');

                $criteria->addSelectColumn(ProcessCategoryPeer::CATEGORY_UID);
                $criteria->addSelectColumn(ProcessCategoryPeer::CATEGORY_PARENT);
                $criteria->addSelectColumn(ProcessCategoryPeer::CATEGORY_NAME);
                $criteria->addSelectColumn(ProcessCategoryPeer::CATEGORY_ICON);
                
                $dataset = AppEventPeer::doSelectRS($criteria);
                $dataset->setFetchmode(ResultSet::FETCHMODE_ASSOC);

                while ($dataset->next()) {
                    $result[] = $dataset->getRow();
                }
            } else {
                $record = ProcessCategoryPeer::retrieveByPK($categoryUid);
                $result = $record->toArray(BasePeer::TYPE_FIELDNAME);
            }
        } catch (Exception $e) {
            throw new RestException(412, $e->getMessage());
        }
        
        return $result;
    }


}
