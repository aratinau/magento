<?php
/**
 * Created by PhpStorm.
 * User: Aymeric
 * Date: 12/11/2017
 * Time: 18:17
 */

class Magentotutorial_Weblog_Model_Resource_Blogpost extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('weblog/blogpost', 'blogpost_id');
    }
}