<?php 
$obj = new User;
print_r($obj); echo "</br>";
$obj->name = "Ducnhu";
$obj->pss = "Daik";
print_r($obj);
echo "</br>";
$obj->save_user();
    class User {
        public $name;
        public $pss;

        function save_user() {
            echo "Sever";
        }
    }
?>