<?php
/* 
< less than
>Greater than
<=Less than or equal to
>= Greater than or equal
== Equal to
=== Identical to
!= not equal to
!==Not identical to
*/

/* ----if statements----*/
/* 
**if statement syntax
if(condition){
  //code to be executed if condition is true
}
*/
$age=17;
// if($age>=18){
//   echo "You are old enough to vote";
// }else{
//   echo "Sorry! you are not enough to vote";
// }

$t=date("H");
// if($t<12){
//   echo 'good morning';
// }else if($t<17){
//   echo "good afternoon";
// }else{
//   echo "good evening";
// }

//ternary 
$posts=['First post'];
// echo !empty($posts)?$posts[0]:'No posts';

// $first_post=!empty($posts)?$posts[0]:"No posts any more";
// echo $first_post;

//collesing operator
// $first_post=$posts[0]??null;
// echo $first_post;

$fav_color='yellow';
switch($fav_color){
  case 'red':
    echo "Your favorite color is red";
    break;

     case 'blue':
    echo "Your favorite color is blue";
    break;
     case 'green':
    echo "Your favorite color is green";
    break;
     case 'orange':
    echo "Your favorite color is orange";
    break;
    default:
    echo "Your favorite color is not red,blue,green or orange";
    break;
}

?>