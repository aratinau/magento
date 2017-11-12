<?php
class Magentotutorial_Helloworld_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
        //remove our previous echo
        //echo 'Hello Index!';
        $this->loadLayout();
        $this->renderLayout();
    }

    public function goodbyeAction() {
        echo 'Goodbye World!';
    }

    public function paramsAction() {
        echo '';
        foreach($this->getRequest()->getParams() as $key=>$value) {
            echo 'Param: '.$key.'';
            echo 'Value: '.$value.'';
            echo '<br>';
        }
        echo '';
    }
}