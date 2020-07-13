<?php 
	$obj = new mycls;
    $nm1 = "Ducnhu";
    $nm2 = "DK Thi";
    $obj-> myfun($nm1, $nm2);
    class mycls{
    	function myfun($name1, $name2) {
        	echo "Hoc sinh: $name1</br>Teacher: $name2";
        }
    }
?>