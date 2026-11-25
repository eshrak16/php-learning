<?php 
class Employee{
    protected $salary = 30000;
    public function displaySalary(){
        echo "employee salary :" . $this->salary ."<br>";
    } 
}
class Manager extends Employee{
    public function showSalary(){
        echo "Manager salary:". $this->salary ."<br>";
    }
}
$manager1 = new Manager();
$manager1->showSalary();
$manager1->displaySalary();
echo $manager1->displaySalary();
?>