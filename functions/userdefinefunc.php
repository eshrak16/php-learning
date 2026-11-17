<?php
/*Practical 1
Create these two functions yourself:
Function 1: greet(
- Print Hello, Developer!
Function 2: showName()
- Print your name.
Call each function twice. */
function greet(){
    print_r("Hello,Developer");
}
function showName(){
    print_r("eshrak");
}
greet();
greet();
showName();
showName();

/*parameters and argumenets */

function calculateTotal($price,$quantity){
    $total = 0;
    $total = $price * $quantity;
    return $total;

}
$result1 = calculateTotal(12,24);
$result2 = calculateTotal(12,50);
$grandtotal = $result1 + $result2;
echo "grandtotal: " . $grandtotal;


/*Practical Exercise
Your turn
Create a function named calculateDiscount().

Requirements:
1. Accept two parameters: $price and $discount.
2. Calculate the discount amount.
3. Return the final price after discount.
4. Store the returned value in a variable.
5. Display the final price.
Example:
- Original price: ₹1000
- Discount: 10%
- Expected final price: ₹900 */
function calculateDiscount($price,$discount){
    $discountpr=0;
    $discountpr = $price - $discount * $price / 100;
    return $discountpr;


}
$discount = calculateDiscount(100,10);
echo "discount price :". $discount;



/*Practical 2 – Slightly challenging
Create a function named calculateSalary().

Requirements:
- Accept $basicSalary and $bonus.
- Add the bonus to the basic salary.
- Return the final salary.
- Store the returned value in a variable.
- Display the final salary.
Test values:
- Basic salary: ₹25,000
- Bonus: ₹5,000
- Expected result: ₹30,000 */
function calculateSalary($basicSalary ,$bonus){
    $salary = $basicSalary + $bonus;
    return $salary;

}
$salary = calculateSalary(10000,1000);
echo "final salary:" . $salary;

?>
