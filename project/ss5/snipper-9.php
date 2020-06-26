<?php 
  $var1 = 4;
  $var2 = 10;
  function multiply() {
      global $var1, $var2, $var3;
      $var3 = $var1 * $var2;
      echo $var3;
  }  
  echo "The multiplication value of 4 * 10 ="; multiply();
?>