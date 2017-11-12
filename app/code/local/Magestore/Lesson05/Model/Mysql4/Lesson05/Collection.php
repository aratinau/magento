<?php
/**
 * Magestore
 *
 * Online Magento Course
 *
 */

/**
 * Lesson05 Resource Collection Model
 *
 * @category Magestore
 * @package Magestore_Lesson05
 * @author Magestore Developer
 */
class Magestore_Lesson05_Model_Mysql4_Lesson05_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('lesson05/lesson05');
    }
}
