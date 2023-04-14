<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    Error Control Operator
    - Control The Errors

    @
    - Variable
    - File
    - Include
  */

  // Variable
  $a = 10;
  $b = @$a or die("Variable Not Found"); //@ dont show error message even there is an error

  // or means this $b = @$a   will run or this die("Variable Not Found") will run
  // die stop script working as default but it shows the message between (" ") , die wont run if  $a = 10; is available
 // this coming script won't run .

  echo "Test $b";
  echo '<br>';

  // File
  $f = @file("marjin.txt") or die("File Not Found"); // @file : read file into array
  echo '<pre>';
  print_r($f);
  echo '</pre>';
  echo '<br>';

  // Include
  (@include("mar_jin.php")) or die("Include File Not Found");