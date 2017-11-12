<?php
/**
 * Magestore
 *
 * Online Magento Course
 *
 */

/**
 * Lesson05 Resource Model
 *
 * @category Magestore
 * @package Magestore_Lesson05
 * @author Magestore Developer
 */
class Magestore_Lesson05_Model_Mysql4_Lesson05 extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {
        /* lesson05_id is primary of lesson05 table */
        $this->_init('lesson05/lesson05', 'lesson05_id');
    }
}
