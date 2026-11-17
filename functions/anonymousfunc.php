<?php
//using return functions and multi paramter in anonymous function 
/*$calculae = function($a,$b){
    return $a + $b;
};
$result = $calculae(45,50);
echo "calculated result : " . $result;

 */


/*Practical – Anonymous Functions in PHP
Ek anonymous function create karo.

Requirements:
1. Variable name: $calculate
2. Parameters: $a and $b
3. Dono numbers multiply karo.
4. Result ko return karo.
5. Returned value ko $result variable mein store karo.
6. Result ko echo se display karo. */

$calculate =function($a,$b){
    return $a * $b;
};
$result = $calculate(12,45);
echo "Result : " . $result ;


?>