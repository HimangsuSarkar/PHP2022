<?php
//simply array
//we can write  simply array with two ways
$numbers=[1,2,3,5,88];
$fruits=array('orange','apple','banana');

// print_r($numbers);
// var_dump($numbers);
// echo $fruits[0]
//array always 0 base. so that index start with 0

//associative array

//associative array is key,value pair array

$hex=[
  'red'=>'#f00',
  'blue'=>'#00f',
  'green'=>'#0f0',

];
// echo $hex['blue'];

$person=[
  'first_name'=>'Zhang',
  'last_Name'=>'haidong',
  'email'=>'zhang@gamil.com'
];
// echo $person['first_name'];

//multidimensional array
//some array inside an array it's called multidimensional array

$people=[
  [
  'first_name'=>'Zhang',
  'last_Name'=>'haidong',
  'email'=>'zhang@gamil.com'
  ],
  [
  'first_name'=>'cheng',
  'last_Name'=>'bo',
  'email'=>'cheng@gamil.com'
  ],
  [
  'first_name'=>'wang',
  'last_Name'=>'tai',
  'email'=>'wang@gamil.com'
  ],
];

// echo $people[1]['email'];
var_dump(json_encode($people));
?>