<?php 
if(isset($_COOKIE['Ducnhu'])) 
{
    $last = $_COOKIE['Ducnhu'];
    echo 'WelCome back </br> Your namme is' , $last;
}
else {
    echo "Welcome";
}
?>