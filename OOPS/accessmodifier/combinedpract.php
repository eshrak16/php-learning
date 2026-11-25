<?php 
class Employee{
    public $name;
    protected $salary;
    private $employerId;
    public function __construct(){
        echo "object created sucessfully!";
        $this->name;
        $this->salary;
        $this->employerId;
    }
    public function displayDetails(){
        echo "Name : " . $this->name . "<br>";
        echo "Salary : ". $this->salary ."<br>";
        echo "Employee id: ". $this->employerId ."<br>";
    }
}
class Manager extends Employee{
    public function displayManagerSalary(){
        echo "Manager salary : ". $this->salary ."<br>";
    }
}
$manager1 = new Employee();
$manager1->displayDetails();

?>