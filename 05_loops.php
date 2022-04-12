<?php
/*----for loop---*/
/* 
**for loop syntax
for(initialize;condition;increment){
  //code to be executed
}
*/

// for($x=0;$x<=10;$x++){
//   echo 'Number '.$x .'<br>';
// }

/*----while loop---*/
/* 
**while loop syntax
while(condition){
  //code to be executed
  increment;
}
*/

// $x=1;
// while($x<=14){
//   echo 'Number '.$x .'<br>';
//   $x++;
// }

/*----do while loop---*/
/* 
** do while loop syntax
do{
  //code to be executed
  increment;
}while(condition);

***note: do...while loop will always execute the block of code once,even if the condition is false; 
*/


// $x=6;
// do{
//   echo 'Number '.$x .'<br>';
//   $x++;
// }while($x<=5);

/*----foreach loop---*/
/* 
**foreach loop syntax
foreach($array as $value){
  //code to be executed
}
*/

$posts=['first','second','third'];

// for($x=0;$x<count($posts);$x++){
//   echo $posts[$x];
// }

// foreach($posts as $post){
//   echo $post;
// }

// foreach($posts as $index =>$post){
//   echo $index. '- ' .$post.'<br>';
// }

//associative array
$person=[
  'first_name'=>'Zhang',
  'last_Name'=>'haidong',
  'email'=>'zhang@gamil.com'
];

foreach($person as $key=>$value){
  echo "$key -  $value <br>";
}
?>