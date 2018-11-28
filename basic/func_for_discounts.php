<?php
//This is the math for discounts

function fuc_discount($product, $percentage){
     $discountValue = $product / 100 * $percentage;
     $totalValue = $product - $discountValue; 
    return $totalValue;

}

?>