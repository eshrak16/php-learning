
<?php

// PRODUCT DATA
$products = [
    ["name" => "Laptop", "price" => 50000, "quantity" => 1],
    ["name" => "Mouse", "price" => 500, "quantity" => 2],
    ["name" => "Keyboard", "price" => 1500, "quantity" => 1],
    ["name" => "Monitor", "price" => 12000, "quantity" => 1]
];

$discount = 10;


// TASK 1: NORMAL FUNCTION
function calculateProductTotal($price, $quantity) {
    return $price * $quantity;
}


// TASK 2: ANONYMOUS FUNCTION + CLOSURE
$calculateDiscount = function($total) use ($discount) {
    return $total - ($total * $discount / 100);
};


// TASK 3: ARRAY_MAP()
// Calculate original totals for all products
$productTotals = array_map(function($product) {
    return calculateProductTotal(
        $product['price'],
        $product['quantity']
    );
}, $products);


// TASK 4 & 5: FOREACH + GRAND TOTAL
$grandTotal = 0;
$totalOriginal = 0;

echo "========== PRODUCT BILLING SYSTEM ==========" . "<br><br>";

foreach ($products as $index => $product) {

    $originalTotal = $productTotals[$index];

    $discountedTotal = $calculateDiscount($originalTotal);

    $totalOriginal += $originalTotal;
    $grandTotal += $discountedTotal;

    echo "Product: " . $product['name'] . "<br>";
    echo "Quantity: " . $product['quantity'] . "<br>";
    echo "Original Total: ₹" . number_format($originalTotal, 2) . "<br>";
    echo "Discounted Total: ₹" . number_format($discountedTotal, 2) . "<br>";
    echo "------------------------------------------" . "<br>";
}


// FINAL BILL SUMMARY
$totalDiscount = $totalOriginal - $grandTotal;

echo "<br>============= FINAL BILL =============" . "<br>";
echo "Original Bill: ₹" . number_format($totalOriginal, 2) . "<br>";
echo "Discount (" . $discount . "%): ₹" . number_format($totalDiscount, 2) . "<br>";
echo "Grand Total: ₹" . number_format($grandTotal, 2) . "<br>";

?>
