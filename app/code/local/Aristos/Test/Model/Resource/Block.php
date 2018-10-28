<?php
class Aristos_Test_Model_Resource_Block extends Mage_Core_Model_Mysql4_Abstract {
    public function _construct() {
        $this->_init('test/block','block_id');
    }
}