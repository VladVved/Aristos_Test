<?php
class Aristos_Test_TestController extends Mage_Core_Controller_Front_Action {

    public function indexAction(){

//        $text = Mage::getStoreConfig('test/settings/var_text');
//        var_dump($text);
        $this->loadLayout();
        $this->renderLayout();
    }
}