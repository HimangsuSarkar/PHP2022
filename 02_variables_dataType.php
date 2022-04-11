<?php
/*-----PHP Data Types-----*/
/*
-String     series of character surrounding by quotes
-integer    whole numbers
-float      Decimal numbers
-boolean    true or false
-array      special variable,which can hold more than one value
object      a class
NULL        empty variable
Resource    special variable that holds a resource
*/

/*-----variable Rules-----*/ 
/*
  -Variables must be prefixed with $
  -Variable must start with a letter or the underscore character
  -Variable can't start with a letter
  -variable can only contain alpha-numeric character and underscore(A-Z,a-z,0-9 and _)
  -variable are case-sensitive($name and $NAME are two different variables)
 */
    $name='shekor';//string
    $age=25;//numbers
    $has_kids=false;//boolean
    $cash_on_hand='20£';//float

    // echo $name. ' is '.$age .' years old';//concat

    echo "$name is $age years old";

    //concent
    define('HOST','localhost');
    define('DB_NAME','dev_db');
    echo HOST;
?>