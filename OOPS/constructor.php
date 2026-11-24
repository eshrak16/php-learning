<?php
class Student{
    public $name;
    public $age;

    public function __construct($name,$age=18){//created consructor wirth default paramters 
    
        echo "student object created!" . "<br>";
        $this->name =$name;
        $this->age =$age;
    }
    public function displaydetails(){
        echo "Name: ".$this->name."<br>";
        echo "Age: ".$this->age."<br>";
    }
}
$student1 = new Student("eshrak",21);
$student1->displaydetails();
$student2 = new Student("faisal",22);
$student2->displaydetails();
$student3 = new Student("Snorx");
$student3->displaydetails();

?>
