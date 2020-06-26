<?php 
    class Greetings {
        private $word = "Hello";
    }
    $closure = function($whom) {
        echo "$this->word $whom</br>";
    };
    $obj = new Greetings();
    $closure->call($obj, 'Daik');

    $closure->call($obj, 'Daik');
?>