<?php
class Vijay_RemoveCompare_Helper_Product_Compare extends Mage_Catalog_Helper_Product_Compare
{
	public function getAddUrl($product)
	{
		//return $this->_getUrl(’catalog/product_compare/add’, $this->_getUrlParams($product));
		return false;
	}
}