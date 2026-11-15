<?php
$array1=["Eshrak","Roman","Faisal"];
$array2=["Anas","Junaid","Arshan"];
print_r($array1);
echo $array1[0];
$array2[0]="zeshan";

$array1[]="Anas";
print_r($array1);
?>
<?php
$fruits = ["Apple", "Mango", "Banana", "papaya","Guava"];
echo "Count : " . count($fruits) ." ";
array_push($fruits,"Orange","Grapes");
array_pop($fruits);
if (in_array("Mango", $fruits)){
    echo "Mango Found!";
}
else{
    echo "Mango not Found!";
};
$removedarray = array_pop($fruits);
echo "removedfruit: " . $removedarray;

array_shift($fruits);/*removing from begining*/
array_unshift($fruits,"Tangerine","Karvanda");/*addding from begining */
print_r($fruits);
echo array_search("Orange", $fruits);