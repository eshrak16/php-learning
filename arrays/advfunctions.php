<?php
/*
$fruits = ["Apple", "Mango", "Banana", "Orange", "Grapes"];

$result = array_slice($fruits,0,2);
var_dump($result);
*/

/*$prices=[100,200,300,400];
$newPrices = array_map(function($price) {
    return $price + 10;
}, $prices);

print_r($newPrices); */
$numbers = [3, 5, 7];
$newnumberedarray = array_map(function($number){
    return $number*2;
},$numbers);
print_r($newnumberedarray);
?>
