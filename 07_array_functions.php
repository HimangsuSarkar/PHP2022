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
$arr4=[...$arr1,...$arr2]; //spread
// print_r($arr4);


//array combine
$a=['green','red','yellow'];
$b=['avacado','apple','banana'];
$c=array_combine($a,$b); 
// print_r($c);

$keys=array_keys($c); //same way to find values
// print_r($keys);

//array flip
$filled=array_flip($c);
// print_r($filled);

//array range and map
$numbers=range(1,20);
// print_r($numbers);
$new_numbers=array_map(function($number){
  return "Number ${number}";
},$numbers);

// print_r($new_numbers);

//array filter
$less_than10=array_filter($numbers,fn($number)=>$number<=10);
// print_r($less_than10);

//array reduce
$sum=array_reduce($numbers,fn($carry,$number)=>$carry+$number);

var_dump($sum);

?>