<?php
$students = [
    ["name"=>"Eshrak",
    "age"=>20],
    ["name"=> "Faisal",
    "age"=> 21]
];
print_r($students);
echo $students[0]["name"];
echo $students[1]["age"];
$students[1]["age"]=22;
print_r($students[1]);
$students[1]["name"]="Sameer";
$students[1]["age"]=23;
$students[]=["name"=>"Anas",
"age"=> 21];
print_r($students);
?>