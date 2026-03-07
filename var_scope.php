<?php
  // This is a global varibale 
  $x = 10;
  $y = 5;
  function Test() {
    // To access the global use either the global array
    // or global key word.
    global $x;
    echo "{$x} <br>";
    echo "{$GLOBALS['y']} <br>";
  }
  
  function Test2() {
    // static scope
    static $x = 0;
    echo "{$x} <br>";
    $x++;
  }
  Test();
  Test2();
  Test2();
  Test2();
  Test2();
?>