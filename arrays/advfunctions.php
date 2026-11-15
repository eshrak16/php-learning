<?php
/**
 arrray_map()
 */

$nums = [5, 10, 15, 20, 25];
$newnos=array_map(function($no){
    return $no * $no;
},$nums);
print_r($newnos);

$prices = [100, 200, 300, 400, 500];
$discount = array_map(function($price){
    return $price - ($price * 10/100);
},$prices);
print_r($discount);



/**
 array_filter()
 */
$prices = [99, 250, 499, 150, 799, 1200, 350];
$filterdprice=array_filter($prices,function ($price) {
    return $price > 300;
});
print_r($filterdprice);


$marks = [35, 80, 45, 90, 28, 65, 95, 30];
$passedStudents=array_filter($marks,function($mark){
    return $mark >= 40;
});
print_r($passedStudents);




/*
array_column();
*/
$students = [
    [
        "name" => "Eshrak",
        "age" => 20,
        "city" => "Mumbai"
    ],
    [
        "name" => "Rahul",
        "age" => 21,
        "city" => "Pune"
    ],
    [
        "name" => "Faisal",
        "age" => 22,
        "city" => "Delhi"
    ]
];
print_r(array_column($students,"name","age"));





$products = [
    ["id" => 101, "name" => "Laptop", "price" => 50000],
    ["id" => 102, "name" => "Mouse", "price" => 500],
    ["id" => 103, "name" => "Keyboard", "price" => 1500],
    ["id" => 104, "name" => "Monitor", "price" => 12000]
];
$productnames=array_column($products,"name");
print_r($productnames);
$productprices=array_column($products,"price");
print_r($productprices);
$extracteddata=array_column($products,"name","id");
print_r($extracteddata);

?>
