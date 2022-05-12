<?php
if(isset($_POST['submit'])){
  // $name=htmlspecialchars($_POST['name']);
  //  $name=filter_input(INPUT_POST, 'name',FILTER_SANITIZE_SPECIAL_CHARS); 

   $name=filter_var($_POST['name'],FILTER_SANITIZE_SPECIAL_CHARS);
$age=htmlspecialchars($_POST['age']);
echo $name;
echo $age;


}

?>
 
<!-- <a href="<?php echo $_SERVER['PHP_SELF'];?>?name=Himu&age=24" >Click</a> -->

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
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
