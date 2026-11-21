<?php
class Car {
    public $brand;
    public $color;
    public $speed;

    public function start(){
        echo "car has started!";
    }
}

$car1 = new Car();
$car1->brand = "Honda";
$car1->color = "Green";
$car1->speed = 130;
$car1->start();

$car2 = new Car();
$car2->brand = "suziki";
$car2->color = "grey";
$car2->speed = 125;
$car2->start();

echo $car1->brand;
echo $car2->speed;
    
?>