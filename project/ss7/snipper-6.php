<?php 
    $anon_class_obj = new class {
        public $greeting = "hello";
        public $id =754;
        const SETT = "some";
        public function getValue() {
            return "Some return value";
        } 
        public function getValueWithArg($str1) {
            return "Returned value is" . $str1;
        }
    };
    echo "</br>" . $anon_class_obj->greeting . "</br>";
    echo "</br>" . $anon_class_obj->id . "</br>";
    echo "</br>" . $anon_class_obj::SETT . "</br>";
    echo "</br>" . $anon_class_obj->getValue() . "</br>";
    echo "</br>" . $anon_class_obj->getValueWithArg("Apteh") . "</br>";

?>