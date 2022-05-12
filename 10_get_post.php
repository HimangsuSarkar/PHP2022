<?
/*-- $_GET & $_POST Superglobals */

/*
we can pass data through urls and forms using the $_GET and $_POST Superglobals.
 */
// echo $_GET['name'];
// echo $_GET['age'];

if(isset($_POST['submit'])){
echo $_POST['name'];
echo $_POST['age'];
}

?>
<!-- 
<a href="<?php echo $_SERVER['PHP_SELF'];?>?name=Himu&age=24" >Click</a>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
<div>
  <label for='name'>Name:</label>
  <input type="text" name="name" id="">
</div>

<div>
  <label for="age" >Age:</label>
  <input type="text" name="age" id="">
</div>
<input type="submit" value="Submit" name="submit">

</form> -->

<?php
// $array = array (1,2,3,4,5,6,7,8);
// $sum = 0;
// for ($i = 0; $i <5; $i++) $sum *= $array[$i];
// echo $sum
// $array = array (1,2,3,4,5,6,7,8);
// $sum = 100;
// for ($i = 1; $i <4; $i++) $sum *= $array[$i];
// echo $sum

// for ($x = 0; $x <= 50; $x+=10 ) {
// echo "$x ";
// }
$numbers = array(4, 3, 4, 9, 5);
echo $numbers[ count($numbers)-1 ];
?>