<?php 
    $con = new mysqli("localhost", "root", "", "mysqlitest");
    if($con->connect_error) die("False Error");
    if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
        $un_temp = mysql_entities_fix_string($con, $_SERVER['PHP_AUTH_USER']);
        $pw_temp = mysql_entities_fix_string($con, $_SERVER['PHP_AUTH_PW']);
        $query = "select * from users where username = '$un_temp'";
        $result = $con->query($query);
        if(!$result) die("Uer not found");
        elseif($result->num_rows) {
            $row = $result->fetch_array(MYSQLI_NUM);

            $result->close();
            if(password_verify($pw_temp, $row[3]))
            echo htmlspecialchars("$row[0] $row[1] : Hi $row[0], u are now logged in as '$row[2]'");
            else die("Invaled username / pass combianation 1");
        }
        else die("Invaled username / pass combianation");
    }
    else
{
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    die("Please enter your username and password");
}

$con->close();


    function mysql_entities_fix_string($con, $string)
{
    return htmlentities(mysql_fix_string($con, $string));
}
function mysql_fix_string($con, $string)
{
if (get_magic_quotes_gpc()) $string = stripslashes($string);
return $con -> real_escape_string($string);
}
?>