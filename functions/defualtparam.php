<?php
function calculateBill($price ,$quantity = 1){
    
    $total = $price * $quantity;
    return $total;
}
$result1=calculateBill(500);
$result2=calculateBill(500,2);
$result3=calculateBill(250,4);

echo "result1: " . $result1;
echo "result2: " . $result2;
echo "result3: " . $result3;

?>