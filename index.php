<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    String Operators
    - Concatenate Strings

    .
    .=
  */

  define("ELZERO", "1");

  $a = "Mariam";
  $b = "Samy";
  $c = "Badr";

  echo "$a $b $c";
  echo '<br>';
  echo "{$a} {$b} {$c}";
  echo '<br>';
  echo $a . " " . $b . " " . $c;
  echo '<br>';
  echo "{$a} {$b} {$c} " . PHP . " " . testing();
  echo '<br>';

  function testing() {
    return 1;
  }

  $x = "Elzero ";
  $x .= "Web"; // $x = $x . "Web" => Elzero Web
  $x .= " School"; // $x = $x . "School" => Elzero Web School

  echo $x;