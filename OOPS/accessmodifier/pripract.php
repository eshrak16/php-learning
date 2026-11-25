
<?php

class Account {
    public $accountholder;
    private $balance;
    public $isvalid = false;

    // Constructor: account create karte waqt initial balance validate karega
    public function __construct($accountholder, $balance) {
        if ($balance > 0) {
            $this->accountholder = $accountholder;
            $this->balance = $balance;
            $this->isvalid = true;

            echo "Account created successfully<br>";
        } else {
            $this->isvalid = false;
            echo "Account creation unsuccessful!<br>";
        }
    }

    // Getter: private balance ko safely retrieve karega
    public function getBalance() {
        // $this->isvalid current object ki property hai
        if ($this->isvalid) {
            return $this->balance;
        } else {
            echo "Account is invalid!<br>";
            return null;
        }
    }

    // Setter: private balance ko update karega
    public function setBalance($balance) {
        // Pehle check: account valid hai?
        // Doosra check: naya balance positive hai?
        if ($this->isvalid && $balance > 0) {
            $this->balance = $balance;

            echo "Balance updated successfully!<br>";
        } else {
            echo "Invalid balance or account!<br>";
        }
    }

    // Account ki details display karega
    public function accountdetails() {
        if ($this->isvalid) {
            echo "Account Holder: " . $this->accountholder . "<br>";
            echo "Account Balance: " . $this->balance . "<br>";
        } else {
            echo "Account not available!<br>";
        }
    }
}

// Object creation
$account1 = new Account("Eshrak", 2000);

// Display account details
$account1->accountdetails();

// Update balance using setter
$account1->setBalance(3000);

// Retrieve balance using getter
echo "Current Balance: " . $account1->getBalance() . "<br>";

// Display updated details
$account1->accountdetails();

?>
