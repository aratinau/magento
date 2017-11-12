<?php
/**
 * Created by PhpStorm.
 * User: Aymeric
 * Date: 12/11/2017
 * Time: 19:19
 */

class Magentotutorial_Weblog_Model_Blogpost extends Mage_Core_Model_Abstract
{
    protected function _construct()
    {
        $this->_init('weblog/blogpost');
    }
}