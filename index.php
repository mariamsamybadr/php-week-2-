<?php

  /*
    Operators
    - Used To Perform Operations On Values.

    String Operators
    - Concatenate Strings

    .
    .=
  */

  define("MARJIN", "1");

  $a = "Mariam";
  $b = "samy";
  $c = "badr";

  echo "$a $b $c";
  echo '<br>';
  echo "{$a} {$b} {$c}";
  echo '<br>';
  echo $a . " " . $b . " " . $c;
  echo '<br>';
  echo "{$a} {$b} {$c} " . MARJIN . " " . testing();
  echo '<br>';

  function testing() {
    return 1;
  }

  $x = "MARIAM ";
  $x .= "SAMY"; // $x = $x . "SAMY" => MARIAM SAMY
  $x .= " BADR"; // $x = $x . "BADR" => MARIAM SAMY BADR

  echo $x;