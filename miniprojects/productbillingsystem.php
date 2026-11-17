
<?php

// PRODUCT DATA

$products = [
    ["name" => "Laptop", "price" => 50000, "quantity" => 1],
    ["name" => "Mouse", "price" => 500, "quantity" => 2],
    ["name" => "Keyboard", "price" => 1500, "quantity" => 1],
    ["name" => "Monitor", "price" => 12000, "quantity" => 1]
];

$discount = 10;


// TASK 1: Create a normal function
// Function name: calculateProductTotal
// Parameters: $price, $quantity
// Return: price multiplied by quantity
function calculateProductTotal($price,$quantity){
    return $price * $quantity;
};
$estimated_price = calculateProductTotal(200,3);
echo "Your Estimated price: " . $estimated_price ." only" . "<br>";



// TASK 2: Create an anonymous function
// Variable name: $calculateDiscount
// Parameter: $total
// Capture $discount using use()
// Return final price after discount
$calculateDiscount = function($total) use ($discount){
    return $final =$total - ($total * $discount / 100);
};
echo "Final price after discount : " . $calculateDiscount(1000) . '<br>';



// TASK 3: Use array_map()
// Apply the discount calculation to product totals
// Store the results in a new array
$discount_price = array_map(function ($product){
    return $product['price'] * $product['quantity'];
},$products);
print_r($discount_price);


// TASK 4: Use foreach
// Display product name, original total and discounted total
foreach($products as $product){
    echo "product name : " . $product["name"] . "<br>";
    echo "Original total : " . $product["price","quantity"] . "<br>";
    echo "discounted total : " . $calculateDiscount($product["price","quantity"]) . "<br>";

};

// TASK 5: Calculate the grand total
// Add all discounted product totals
// Display the final bill


?>
