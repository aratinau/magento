<?php
/**
 * Created by PhpStorm.
 * User: Aymeric
 * Date: 12/11/2017
 * Time: 17:41
 */

class Magentotutorial_Weblog_IndexController extends Mage_Core_Controller_Front_Action
{
    public function testModelAction()
    {
        $params = $this->getRequest()->getParams();
        $blogpost = Mage::getModel('weblog/blogpost');
        echo("Loading the blogpost with an ID of ".$params['id']);
        $blogpost->load($params['id']);
        $data = $blogpost->getData();
        var_dump($data);
    }
}