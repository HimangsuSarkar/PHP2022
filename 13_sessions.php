<?php
/*-------- Sessions------ */

/* Sessions are a way to store information (in variables) to be used across multiple pages.
unlike cookies, sessions,= are stores on servers.
*/

session_start();
if(isset($_POST['submit'])){
  // $name=htmlspecialchars($_POST['name']);
   $name=filter_input(INPUT_POST, 'name',FILTER_SANITIZE_SPECIAL_CHARS); 

  //  $username=filter_var($_POST['name'],FILTER_SANITIZE_SPECIAL_CHARS);

   $password=$_POST['password'];

   if($username=='john' && $password=='password'){
     $_SESSION['username']==$username;
     header('Location: /php2022/extras/dashboard.php');
   }else{
     echo "Incorrect login";
   }



}

?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
<div>
  <label for='username'>UserName:</label>
  <input type="text" name="username" id="">
</div>

<div>
  <label for="password" >Password:</label>
  <input type="password" name="password" id="">
</div>
<input type="submit" value="Submit" name="submit">

</form> 