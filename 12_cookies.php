<?php

/**-----------cookies------- */
/* 
cookies are a mechanism for storing data in the remote browsers and thus tracking or identifying return users.You  can set specific data to be stored in the browsers,and then retrieve it when the user visits the site again. 

*/

//set cookies
setcookie('name','himu',time()+86400*30);

if(isset($_COOKIE['name'])){
  echo $_COOKIE['name'];
};

setcookie('name', '',time()+86400);