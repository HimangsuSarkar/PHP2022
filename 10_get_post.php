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

</form>