<?php
class Test_Taufik_Model_Mysql4_Taufik extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("taufik/taufik", "taufik_id");
    }
}