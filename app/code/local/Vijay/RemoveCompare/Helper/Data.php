<?php
class Vijay_RemoveCompare_Helper_Data extends Mage_Core_Helper_Abstract
{
	const XML_PATH_AGE_VERIFY_ENABLE   = 'removecompare_tab/removecompare_setting/removecompare_active';

	public function conf($code, $store = null) {
        return Mage::getStoreConfig($code, $store);
    }
}