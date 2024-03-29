<?php
class Cammino_Widgets_Block_Listcategories extends Mage_Page_Block_Html {
	public function getChildrenCategories($parentCategory){
		$childrenCategoryId = $parentCategory->getChildren();
		$childrenCategories = array();
		
		foreach(explode(',' , $childrenCategoryId) as $childCategoryId) {
  			$category = Mage::getModel('catalog/category')->load($childCategoryId);
			
			if($category->getIsActive()) {
				$childrenCategories[] = $category;
			}
		}

		usort($childrenCategories, function ($a, $b) {
			return $a->getPosition() - $b->getPosition();
		});

		return $childrenCategories;
	}
}
