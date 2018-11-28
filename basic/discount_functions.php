<?php
    function discounting($value, $value_discount){
        $discount = $value * ($value_discount/100);
        return $value - $discount;
}
?>