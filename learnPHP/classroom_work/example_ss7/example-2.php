<?php 
    $obj = new User;
    $obj->name = "Ducnhu";
    $obj2 = $obj;
    $obj2->name = "Daik";
    echo "obj1 name = " . $obj->name . "</br>";
    echo "obj2 name = " . $ob2->name;

    class User {
        public $name;
    }
?>