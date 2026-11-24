<?php
class BankAccount{
    public $accountholder;
    public $balance;
    public $isValid = false;
    public function __construct($accountholder,$balance)
    {
        if ($balance >=0){
            $this->accountholder = $accountholder;
            $this->balance = $balance;
            $this->isValid = true;
            echo "bank account created suessfully!"."<br>";
        }else{
            echo "Invalid details,try again!"."<br>";
        }
    }
    public function displaydetails(){
        if ($this->isValid){
            echo "Name: ". $this->accountholder ."<br>";
        echo "balance: ". $this->balance ."<br>";
        }
        else{
            echo "Account creation Failed! try again";
            }
    }
}

$account1 = new BankAccount("laluprasad",2000);
$account1->displaydetails();
$account2 = new BankAccount("ghanshyam",-12);
$account2->displaydetails();
?>