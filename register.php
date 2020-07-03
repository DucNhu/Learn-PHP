<html>
<body>
    <center>
        <form action="register.php" method="post">
            fullname:
            <input type="text" name="fullname">
</br>username:
            <input type="text" name="username" maxlenght="50">
</br>password:
            <input type="password" name="password" maxlenght="50">
</br>email:
            <input type="email" name="email" maxlength="100">
</br>phone:
            <input type="number" name="phone" maxlength="10">
            
            <input type="submit" name="submit">
        </form>
    </center>
</body>
</html>

<?php 
// create db
        // $con = new mysqli("localhost", "root", "");
        // $con->query("create database register");
        $con = new mysqli("localhost", "root", "", "register");
        //create table:
        // $createtbl = $con->query("create table member(
        //         userid int AUTO_INCREMENT PRIMARY KEY,
        //         fullname varchar(50) not null,
        //         username varchar(50) not null,
        //         password varchar(50) not null,
        //         email varchar(100) not null,
        //         phone int
        //     )");
    // if($createtbl) {
        if(isset($_POST['submit'])) {
        if($con) {
            
            $urname = $_POST['fullname'];
            $username = $_POST['username'];
            $pass = $_POST['password'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            
            $result = $con->query("select * from member where username='$username'");
            if(mysqli_num_rows($result)>0) {
                exit("Error create acc 0%");
            }
            else {
                $createacc = $con->query("insert into member(fullname,username,password,email,phone)
                 values('$urname', '$username','$pass', '$email',$phone)");
                 if($createacc) {
                     echo "create acc 100%";
                 }
                 else {
                     echo "create acc 0%";
                 }
            }
        }
        else {
            exit("Conect db 0%");
        }
    }
    else {
        
    }
    // }
    // else {
    //     echo "create table 0%";
    // }

?>