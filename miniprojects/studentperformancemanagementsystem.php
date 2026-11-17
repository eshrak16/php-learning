
<?php


// STUDENT PERFORMANCE MANAGEMENT SYSTEM


//  DATABASE (Multidimensional Array)

$students = [
    [
        "id" => 101,
        "name" => "Eshrak",
        "maths" => 85,
        "science" => 90,
        "english" => 78
    ],
    [
        "id" => 102,
        "name" => "Rahul",
        "maths" => 45,
        "science" => 55,
        "english" => 60
    ],
    [
        "id" => 103,
        "name" => "Faisal",
        "maths" => 30,
        "science" => 35,
        "english" => 40
    ],
    [
        "id" => 104,
        "name" => "Anas",
        "maths" => 95,
        "science" => 88,
        "english" => 92
    ],
    [
        "id" => 105,
        "name" => "Roman",
        "maths" => 65,
        "science" => 72,
        "english" => 80
    ]
];


// 2. DISPLAY MENU


echo "========================================\n";
echo "   STUDENT PERFORMANCE MANAGEMENT\n";
echo "========================================\n";

echo "1. Display All Students\n";
echo "2. Add New Student\n";
echo "3. Search Student by ID\n";
echo "4. Calculate Student Result\n";
echo "5. Display Passed Students\n";
echo "6. Calculate Class Average\n";
echo "7. Display Top Performer\n";
echo "8. Exit\n";


// ==========================================
// 3. YOUR IMPLEMENTATION AREA
// ==========================================

// TASK 1: Display all students using foreach.
$allstudents = [];
foreach($students as $student){
    []= $student;
    print_r("all students")
}

// TASK 2: Add a new student using array_push().

// TASK 3: Search student using array_filter().

// TASK 4: Calculate total marks using array_sum().

// TASK 5: Calculate percentage.

// TASK 6: Check pass/fail status.

// TASK 7: Filter passed students.

// TASK 8: Calculate class average.

// TASK 9: Find the top performer using sorting.

?>
