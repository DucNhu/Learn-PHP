<?php 
include "login.php";

session_start();
?>
<html>
<body>
    

            <h2>Đăng nhập</h2>
            <form action="login.php" method="POST">
                <!-- name-login -->
                <label for="name-login">name-login:</label>
                <input type="text" id="name-login" name="nameLogin">
                <!-- Pass -->
                <label for="password">Pass:</label>
                <input type="password" id="password" name="password">
                <input type="submit" value="login" name="login">
            </form>
</body>
</html>
<?php

    if(isset($_POST['login'])) {
        
        $con = new mysqli("localhost","root","","register");
        if($con) {
        $nameLogin = $_POST['nameLogin'];
        $pass = $_POST['password'];

        $result = $con->query("select * from member where username='$nameLogin' AND password='$pass'");
        if(mysqli_num_rows($result)>0) {
            $_SESSION['username'] = $nameLogin;
            header('location:index.php');
        }
        else {
            echo "pass or user name error";
        }
        }
        else {
        exit("Exit, connect db 0%");
    }
    }
    
?>