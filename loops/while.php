<?php
/*$i=1;
while($i<=5){
    echo $i . "<br>";
    $i++;
}
 */

$i =0;
while($i<=20){
    echo $i;
    $i += 2;    
}


/*$glasses  = 0;
while ($glasses<5){
    $glasses++;
    echo "Glassses filled:" . $glasses . "<br>";
} */

$battery = 100;
while ($battery>0){
    $battery -= 15;
    
    echo "Battery : " . $battery;
}


$water =0;
while($water< 200){
    $water += 25;
    echo "Water level : ". $water . "<br>";
}
?>