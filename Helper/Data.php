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
		$discount = $this->getPercentageDiscount($product);
		if($discount > 0){
			return "<div class='discount-box'>".$discount."% OFF</div>";
		}else{
			return "";
		}
		var_dump($discount);
	}
}