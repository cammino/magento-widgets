<?php
class Cammino_Widgets_Block_Listcategoryproducts extends Mage_Catalog_Block_Product_List {

	public function getSortBy() {
		return "position";
	}

	public function getDefaultDirection() {
		return "asc";
	}

}