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

	public function getDiscountBoxHtml($product, $label = "% OFF"){
		$discount = $this->getPercentageDiscount($product);
		$html = "";

		if($discount > 0){
			$html = "<div class='discount-box'>";
			$html .= 	$discount;
			$html .= 	$label;
			$html .= "</div>";
		}else{
			$html = "";
		}
		return $html;
	}
}