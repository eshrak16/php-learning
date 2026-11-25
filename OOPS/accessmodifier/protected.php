<?php
class employee{
    protected $salary=25000;
    public function displaySalary(){
        echo "salary: " . $this->salary ."<br>";
    }
}
class Manager extends Employee{
    public function showSalary(){
        echo "Manager Salary: ". $this->salary ."<br>";
    }
}
$manager1 = new Manager();
$manager1->displaySalary();
$manager1->showSalary();
/*echo $manager1-> salary;*/ //this wi;; cause error
?>