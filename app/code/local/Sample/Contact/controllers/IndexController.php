<?php
/**
 * Created by PhpStorm.
 * User: Aymeric
 * Date: 10/11/2017
 * Time: 16:19
 */
class Sample_Contact_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        if ($this->getRequest()->isPost()) {
            $postData = $this->getRequest()->getParams();
            $email = $postData['email'];
            $message = $postData['message'];
            $subject = "Nouveau message de la part de $email !";
            $to = 'aymeric.ratinaud@sfr.fr';
            if (mail($to, $subject, $message)) {
                $this->_redirectUrl('contact/index/confirm');
            }
        }
        $this->renderLayout();
    }
    public function confirmAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}