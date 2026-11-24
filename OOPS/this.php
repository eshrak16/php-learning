<?php 
class student{
    public  $name;
    public $age;
    
    public function displaydetails(){
    echo "Name : " .$this->name . "<br>";
    echo "age :" . $this->age . "<br>";
    }
}
$student1 = new student;
$student1->name = "Eshrak";
$student1->age = 23;

$student2 = new student;
$student2->name = "Macha";
$student2->age = 24;
$student1->displaydetails();
$student2->displaydetails();



?>