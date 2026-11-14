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
echo "Student Name:". " " .$student["name"]. " | " . "Age:" . $student['age'];
}
?>