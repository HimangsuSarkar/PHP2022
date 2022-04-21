<?php
$fruits=['apple','orange','pear'];
//get length
echo count($fruits);

//search array
var_dump(in_array('apple',$fruits));

//add to array
$fruits[]='grape';
array_push($fruits,'blueberry','strawberry');
array_unshift($fruits,'Mango');

//remove from array
array_pop($fruits);
array_shift($fruits);
// unset($fruits[2]);

//spilt into 2 chunks
// $chucked_array=array_chunk($fruits,2);
// print_r($chucked_array);
// print_r($fruits);

//array merge and spread
$arr1=[1,2,3];
$arr2=[4,5,6];

$arr3=array_merge($arr1,$arr2); //array merge
$arr4=[...$arr1,...$arr2];
print_r($arr4);
?>