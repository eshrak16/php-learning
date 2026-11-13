<?php 
$order = [

    "order_id" => 10501,

    "customer" => [
        "name" => "Eshrak Solkar",
        "email" => "eshrak@example.com",
        "phone" => "9876543210"
    ],

    "shipping_address" => [
        "city" => "Mumbai",
        "area" => "Malad West",
        "pincode" => 400064
    ],

    "products" => [

        [
            "product_name" => "Laptop",
            "brand" => "Dell",
            "price" => 60000,
            "quantity" => 1
        ],

        [
            "product_name" => "Wireless Mouse",
            "brand" => "Logitech",
            "price" => 1200,
            "quantity" => 2
        ],

        [
            "product_name" => "Keyboard",
            "brand" => "HP",
            "price" => 1800,
            "quantity" => 1
        ]

    ],

    "payment" => [
        "method" => "UPI",
        "status" => "Successful",
        "transaction_id" => "TXN987654"
    ],

    "total_amount" => 64200

];
echo"<pre>";
print_r($order);
echo"</pre>";
echo"<hr>";
var_dump($order);
?>x