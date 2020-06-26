<?php 
error_reporting(0);

 function e() {
  echo( "This is e() \n");
  return e();
};

function f() {
    echo "This is f() \n";
    return e;
};

function g() {
    echo "This is g() \n";
    return f;
};

g();
echo "************* \n";
g()();
echo "************* \n";
?>