
<?php
$student = [
    "name"=>"Eshrak",
    "age"=>20,
    "role"=> "software developer",
    "city"=>"Mumbai"
];
$keys = array_keys($student);
$values = array_values($student);
print_r($keys);
print_r($values);
if(array_key_exists("name", $student)) {
    echo "name key exists!";
}
else{
    echo "name key does not exist!";
}


$employee = [
    "name" => "Rahul",
    "salary" => 25000,
    "department" => "IT",
    "email" => null
];

if(array_key_exists("salary", $employee)){
    echo "Salary details availabler!";
}
else{
    echo "Salary details unavaialble!";
}
 var_dump(isset($employee["email"]));
 var_dump(array_key_exists("email", $employee));


$colors = ["Red", "Green", "Blue","Red"];
$username = "Eshrak";
$marks = 85;
print_r(is_array($username));
print_r(is_array($colors));
$newarray=(array_merge($colors, $employee));
var_dump($newarray);

var_dump(in_array("red",$colors,true));
$uniquearray =array_unique($colors);/*makes a new and unique arrays with out any repeataive elements */ 
print_r($uniquearray);
print_r(array_reverse($uniquearray));

/*arraysum */
$numbers = [10, 20, 30, 40];
print_r(array_sum($numbers));
$marks = [75, 80, 65, 90, 85];
$total = array_sum($marks);
$countt=count($marks);
var_dump($total);
var_dump($total/$countt);
echo(array_product($numbers));


$studentMarks = [
    "Rahul" => 75,
    "Eshrak" => 90,
    "Faisal" => 60
];

asort($studentMarks);
print_r($studentMarks);


?>


