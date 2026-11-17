<?php


//using use keyword by value 
/*$tax = 5;
$discount = 10;
$calculate = function($price) use ($discount,$tax){
    $afterdiscount = $price - ($price * $discount / 100);
    return $afterdiscount + ($afterdiscount * $tax /100);
};
$discount = 20;
echo $calculate(1000);//value capture*/
$discount = 10;
$tax = 5;
$calculate = function($price) use (&$discount,$tax){
    $discountedprice = $price * $discount / 100;
    return $discountedprice - ($discountedprice * $tax /100);
};
$discount =15;//reference capture
echo $calculate(1000);

?>