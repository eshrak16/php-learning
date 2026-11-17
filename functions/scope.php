<?php
//globalscope
/*$name = "Eshrak";
function greet(){
    
    global $name;//global keyward globalscope
    echo $name;
}
greet(); */


//localscope
/*function greet(){
    
    $name = "Eshrak";
    echo $name;//functional scope
}
greet();
echo $name;//undefined variable
 */


//blockscope
/*if(true){
    $city = "mumbai";
}
echo $city;
 */

//suoperglobal scope
/*$city = "Mumbai";
function changecity(){
    $GLOBALS['city']="pune";
    return $GLOBALS['city'];
};
$newcity = changecity();
echo $newcity; */




$score = 50;

function updateScore() {
    global $score;
    $score = 100;

}

updateScore();

echo $score;
?>