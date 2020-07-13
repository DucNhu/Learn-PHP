<?php require_once 'mySQL_values.php';
    $con = new mysqli($server, $userName, $pass, $dbName);
    if($con->connect_errno) {
        die("Error");
    }
    else {
        echo "hello Ducnhudaik";
    }
?>