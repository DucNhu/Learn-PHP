<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        form {
            flex-direction: column;
        }
    </style>
</head>
<body>

<?php
// require_once 'connectdb.php';
$conn = new mysqli("localhost", "root", "", "mysqlitest");
if($conn -> connect_errno) die("Connect DB error");

 echo <<<_END
    <h2 class="text-center">Register</h2>
    <form action="register.php" method="POST" class="d-flex justify-content-between border p-3 container ">
    
        <label for="name">Name</label>            
        <input id="name" type="text" name="name" required><br>
        <!--  -->
        <label for="pass">Password</label>        
        <input id="pass" type="password" name="password" required><br>
        <!--  -->
        <label for="pass_again">Config password</label> 
        <input id="pass_again" type="password" name="cpassword" required><br>
        <!--  -->
        <label for="email">Email</label>           
        <input id="email" type="email" name="email" required><br>
        
        <a href="login.php" class="btn btn-success mb-3">Login</a>
        <input type="submit" value="Register" name="register" class="btn btn-success">               

    </form>
_END;

if (isset($_POST['register']))
{
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $cpass = $_POST['cpassword'];
    $email = $_POST['email'];

    if ($pass == $cpass)
    {
        $hash = password_hash($pass,PASSWORD_DEFAULT);
        $query = "select * from user where name = '$name'";
        $result = $conn->query($query);
        $rows = $result->num_rows;
        if ($rows > 0)
        {
            echo $name . ' has exits!';
        } else
            {
            $query = "insert into user values ('','$name','$hash','$email')";
            $result = $conn->query($query);
            if ($result)
            {
                echo 'Register successfull !';
                header('location:login.php');
            }
            else echo 'Register fail !';
            }
    } else echo 'password and config password is not match !';
}
?>

        
</body>

</html>