<?php
$age= 13;
$has_validId=true;
if($age>=18){
    echo"Age requirement has been satisfied!<br>";
    if($has_validId == true){
        echo "You can enter the club!";
    }
    else{
        echo "you must have valid id";
    }
}else{
    echo"You are underage!entry denied";
}
?>