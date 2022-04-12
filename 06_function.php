<?php
/*------function-------- */

$y=10;
function registerUser($email){
  // global $y; //if you to $y as a global variable you must declare it with  global keyword.
  // echo $y;

  $x=10;
  echo $email." User Register";
}

//echo $x; //can't access because of function has scope
registerUser("himu"); //pass the parameter


function sum($num1,$num2) //here we can put default value like $num1=4,$num2=5;
{
  return $num1+$num2;
}

sum(4,5);//don't show any result because return not an echo;

echo sum(5,6); //that show result; or store it new variable

$number=sum(4,6);
echo $number;

//anonymous function

$subtract=function($n1,$n2){
  return $n1-$n2;
};
echo $subtract(10,5);

//arrow function 
$multiply=fn($n1,$n2)=>$n1*$n2;

echo $multiply(9,9);

?>