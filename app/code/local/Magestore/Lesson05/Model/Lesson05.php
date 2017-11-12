<?php
/**
 * Magestore
 *
 * Online Magento Course
 *
 */

/**
 * Lesson05 Model
 *
 * @category Magestore
 * @package Magestore_Lesson05
 * @author Magestore Developer
 */
class Magestore_Lesson05_Model_Lesson05 extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('lesson05/lesson05');
    }
}
