<?php
/*Exercise 1 – Number counter
Print numbers from 1 to 50 using a for loop.*/

for($i=1;$i<=50;$i++){
    echo $i . "<br>";
}


/*Exercise 2 – Odd Numbers
Write a PHP program using a for loop.
Requirements:
- Print all odd numbers between 1 and 30.
- Each number should appear on a new line. */
for($i=-1;$i<=30;$i+=2){
    echo $i ."<br>";
}


/*Write a PHP program using a for loop to print all even numbers between 50 and 2 in descending order. */
for($i=50 ;$i>=2;$i-=2){
    echo $i ."<br>";
}


//multiplicaton table
$number= 7;
for($i=1;$i<=10;$i++){
    $value = ($number * $i);
    echo "$number" . " X " . $i . "=" . $value ."<br>";
}
//sum from 1 to 100
$sum = 0;
for($i=1;$i<=100;$i++){
    $sum += $i;
    
}
echo "final sum : " . $sum; 

////electricity bill calculator 
$units=250;
$bill=0;
for($i=1;$i<=$units;$i++){
    if($i <= 100 ){
        $bill += 5; 
    }
    elseif($i <= 200){
        $bill += 7;
    }
    else{
        $bill += 10;
    }
}
echo "bill : " . $bill . "<br>";

//employee salary calculator
/*
$hours =50;
$salary = 0;
for($i=1;$i<=$hours;$i++){
    if($i<=40){
        $salary += 200;
    }
    else($i<40){
        $salary += 300;
    }
}
echo "salary:". $salary . "<br>"; */

//Lesson: Exercise 2 – Shopping Discount Calculator
$items=12;
$totalDiscount = 0;
for($i=1;$i<=$items;$i++){
    if($i<=5){
        $totalDiscount += 100;
    }
    elseif($i<=10){
        $totalDiscount += 150;
    }
    else{
        $totalDiscount += 200;
    }
}
echo "TotalDiscount: " . $totalDiscount . "<br>";



?>


