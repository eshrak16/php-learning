<?php
$initial_balance = 1000;
echo "initial balance : ₹$initial_balance " . "<br>";
$initial_balance += 500;
echo "balance after increment of ₹500: $initial_balance" . "<br>";
$initial_balance -=200;
echo "balance after spending ₹200 : $initial_balance". "<br>";
$initial_balance += 300;
echo "balance after adding ₹300:". $initial_balance . "<br>";
$initial_balance -= 150;
echo "final balance after all transaction : ". $initial_balance . "<br>";
?>