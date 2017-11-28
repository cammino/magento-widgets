<?php 

class Cammino_Widgets_Helper_Data extends Mage_Core_Helper_Abstract
{
	/* Calcula porcentagem de desconto do produto */
	public function getPercentageDiscount($product){
        $originalPrice = $product->getPrice();
        $finalPrice = $product->getFinalPrice();
        $percentage = 0;

        if ($originalPrice > $finalPrice) {
            $percentage = floor (($originalPrice - $finalPrice) * 100 / $originalPrice);
        }

        return $percentage;
	}

	public function getDiscountBoxHtml($product){
		$labelBefore = Mage::getStoreConfig('themeconfig/themeconfig_group_product_item/themeconfig_product_item_discount_label_before');
		$labelAfter = Mage::getStoreConfig('themeconfig/themeconfig_group_product_item/themeconfig_product_item_discount_label_after');

		$discount = $this->getPercentageDiscount($product);
		$html = "";

		if($discount > 0){
			$html = "<div class='discount-box'>";
				if(strlen($labelBefore) > 0){ $html .= 	"<div class='label before'>" . $labelBefore . "</div>";	}
				$html .= 	"<div class='value'>" . $discount . "</div>";
				if(strlen($labelAfter) > 0){ $html .= 	"<div class='label after'>" . $labelAfter . "</div>"; }
			$html .= "</div>";
		}else{
			$html = "";
		}
		return $html;
	}
}