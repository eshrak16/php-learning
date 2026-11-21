<?php 
class Student{
    public $name;
    public $age;
    public $class;

    public function displaydetails(){
        echo "student name : " . $this->name . "<br>";
        echo"Student age: " . $this->age ."<br>";
        echo "Student Class : ". $this->class ."<br>";
    }
}
$student1 = new Student();

$student1->name="Eshrak";
$student1->age= 20;
$student1->class= "Cs";

$student1->displaydetails();

$student2 = new Student();

$student2->name= "Faisal";
$student2->age= 21;
$student2->class= "CS";

$student2->displaydetails();
?>