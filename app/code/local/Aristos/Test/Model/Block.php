<?php
class Aristos_Test_Model_Block extends Mage_Core_Model_Abstract {

    public function _construct(){
        parent::_construct();
        $this->_init('test/block');
//        echo Mage::helper('test')->__('test');
    }
}