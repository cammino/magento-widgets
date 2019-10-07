<?php 

class Cammino_Widgets_Helper_Data extends Mage_Core_Helper_Abstract
{
	/* Calcula porcentagem de desconto do produto */
	public function getPercentageDiscount($product){
        $originalPrice = $product->getPrice();
		$finalPrice = $product->getFinalPrice();

        if ($originalPrice > $finalPrice) {
			$percentage = (($originalPrice - $finalPrice) * 100 / $originalPrice);
			$diff = abs($percentage - ceil($percentage));
			$threshold = floatval(Mage::getStoreConfig('themeconfig/themeconfig_group_product_item/themeconfig_product_item_discount_threshold'));

			if($threshold <= 0) {
				$threshold = 0.15;
			}
			
			// Se a diferença estiver entre o treshhold informado, arredonda a porcentagem para cima, se não arredonda para baixo
			return $diff <= floatval($threshold) ? ceil($percentage) : floor($percentage);
        }

        return 0;
	}

	public function getDiscountBoxHtml($product){
		$labelBefore = Mage::getStoreConfig('themeconfig/themeconfig_group_product_item/themeconfig_product_item_discount_label_before');
		$labelAfter = Mage::getStoreConfig('themeconfig/themeconfig_group_product_item/themeconfig_product_item_discount_label_after');

		// Verifica se existem as variáveis no Themeconfig, se não, seta essas por padrão
		if(gettype($labelBefore) == "NULL") { $labelBefore = "-"; }
		if(gettype($labelAfter) == "NULL") { $labelAfter = "%"; }

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