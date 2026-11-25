<?php
class BankAccount{
    Public $accountholder;
    private $balance;
    public $isValid=false;
    
    
    public function __construct($accountholder, $balance){
    
    if($balance>0){//postitve validation
        $this->accountholder = $accountholder;
        $this->balance = $balance;
        $this->isValid = true;

        echo "object created sucessfully"."<br>";
    }else{
        echo "insufficient balance! Account creation failed.<br>";
    }
    }


    //setter
    public function setBalance($balance){
        if($this->isValid && $balance>0){
            $this->balance = $balance;
            echo "Balance uodated sucessfully!<br>";
        }
        else{
            echo "invalid request!<br>";
        }
    }


//getter
    public function getBalance(){
        if($this->isValid){
            return $this->balance;
        }
        else{
            return null;
        }
    }

    //display details
    public function displayDetails(){
        if($this->isValid){
            echo "Account Holder : " .  $this->accountholder . "<br>";
        echo "Balance : " . $this->balance . "<br>";
        }else{
            echo "Account is invalid .No details available.<br>";
        }
    }
}

$account1 = new BankAccount("Eshrak",2000);

$account1->displayDetails();
$account1->setBalance(3000);
$account1->displayDetails();

echo "current balance: " . $account1->getBalance() ."<br>";
$account1->setBalance(-2100);//invalid input msg through validation
echo "<hr>";

$account2 = new BankAccount("Faisal", -500);
$account2->displayDetails();




?>