<?php

  /*
    Operator Precedence
    - "||" Has A Greater Precedence Than "or"
    - "&#038;&#038;" Has A Greater Precedence Than "and"
  */

 
  echo 10 || false || 0 || [] || ""; // True => 1
  echo '<br>';
  echo true; // 1
  echo '<br>';
  var_dump(10 || false || 0 || [] || ""); // True
  echo '<br>';
  echo 10 || false; // 1
  echo '<br>';

  $a = 10 || false; // $a =(10 || false) , we will do (10 || false) this first and assign the value to a  => $a = 1
  echo $a; // 1

  echo '<br>';

  $b = 10 or false; // ($b = 10) or false , or has no precedence to run so the ($b=10) will run first then or
  echo $b; // 10