<?php
  echo "<h2>Example #1 Use of return</h2>";
  $s1 = microtime(true);
  function square($val){
    return $val * $val;
  }
  echo square(2);
  echo "<br>";
  $e1 = microtime(true);
  echo "Time". ($e1 - $s1);

  echo "<h2>Example #2 Returning an array to get multiple values</h2>";
  function return_multiple(){
    return array(0,1,2,3);
  }
  var_dump(return_multiple());
  list($z,$o,$t,$th) = return_multiple();
  echo $z;

  //below example work only php 7 server
  /*echo "<h2>Example #4 Basic return type declaration</h2>";
  function sum($a, $b): float {
      return $a + $b;
  }

  // Note that a float will be returned.
  var_dump(sum(1, 2)); */

  /*class C {}

  function getC(): C {
      return new C;
  }

  var_dump(getC());
  */
  echo "main dir: ".__DIR__."<br>";
  echo "main root: ".$_SERVER['DOCUMENT_ROOT']."<br>";

?>
