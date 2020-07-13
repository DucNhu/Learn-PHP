<?php 
$object = new Subscriber;
$object->name = "thuan";
$object->password = "password";
$object->email = "abc@gmail.com";
$object->phone = 123456789;
$object->display();
$object->save_user();
class User {
    public $name, $pss;
    function save_user() {
        echo "Save User code goes here";
    }
}
class Subscriber extends User {
    public $phone, $email;
    function display() {
        echo "Name" , $this->name ."</br>";
        echo "Pass" , $this->pss ."</br>";
        echo "Phone" , $this->phone ."</br>";
        echo "Email" , $this->email ."</br>";
    }
}
?>