<?php
  echo "<h2>Function arguents.</h2>";
  echo "<h3>Example #1 Passing arrays to functions</h3>";

  function arrayFn($arr1){
    echo "$arr1[0] + $arr1[1] = ", $arr1[0] + $arr1[1] ;
    echo "<br>";
  }

  $arr1 = [10,20];
  arrayFn($arr1);
?>