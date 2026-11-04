<?php
$balance=2000;
$deposit=200;

$choice=2;
switch($choice){
    case 1:
        echo"Your Balance: ₹" . $balance;
        break;
    case 2:
        $balance= $balance + $deposit;
        echo "Money deposited sucessfully!<br>";
        echo "Updated balance: ₹".$balance;
        break;
    case 3:
        $withdraw_amount =100;
        $withdraw=$balance - $withdraw_amount;
        echo"Withdrawal sucessfully!<br>";
        echo"remaining balance:₹".$balance;
        break;
    case 4:
        echo"thankyou for using our ATM!";
        break;
    default:
    echo"invalid option!";
}
?>