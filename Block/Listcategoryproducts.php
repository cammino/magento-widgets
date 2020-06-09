<?php
class Cammino_Widgets_Block_Listcategoryproducts extends Mage_Catalog_Block_Product_List {

	public function getSortBy() {
		$category = Mage::getModel('catalog/category')->load($this->getCategoryId());

		return $category->getDefaultSortBy();
	}

	public function getDefaultDirection() {
		return "asc";
	}

}