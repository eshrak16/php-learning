<?php
$students = [
    [
        "name" => "Eshrak",
        "age" => 20
    ],
    [
        "name" => "Faisal",
        "age" => 21
    ],
    [
        "name" => "Anas",
        "age" => 22
    ]
];
foreach($students as $student){
    echo $student["name"]."<br>";
    echo $student["age"]."<br>";
}

?>