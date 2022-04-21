<?php
$string='Hello World';

//get the length of string
echo strlen($string);

//find the position of the first occurrence of a substring in a string
echo strpos($string,'o');

//find the position of the last occurrence of a substring in a string
echo strrpos($string,'o');

//reverse a string
echo strrev($string);


//convert all characters to lowercase
echo strtolower($string);

//convert all characters to uppercase
echo strtoupper($string);

//uppercase first character of each word
echo ucwords($string);

//string replace
echo str_replace('World','Everyone',$string);

//return portion of a string specified by the offset and length
echo substr($string,0,5);
echo substr($string,5);

//starts with
// if(str_starts_with($string,'Hello')){
//   echo "YES";
// };

 //end with

// if(str_ends_with($string,'id')){
//   echo "yes";
// }; 

$string2='<script>alert(1)</script>';
echo htmlspecialchars($string2);

printf('%s likes to %s','Himu','code');
printf('1+1=%d',1+1);