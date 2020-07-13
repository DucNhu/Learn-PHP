<?php
session_start();
// require_once 'connectdb.php';
$conn = new mysqli("localhost", "root", "", "mysqlitest");
if($conn -> connect_errno) die("Connect DB error");
// echo <<<_END


// _END;
if (isset($_POST['login']))
{
    $name = $_POST['name'];
    $password = $_POST['password'];


    $query = "select * from user where name = '$name' && pass = '$password'";
    $result = $conn -> query($query);
    if (mysqli_num_rows($result))
    {
        
        // $row = $result->fetch_array(MYSQLI_NUM);
        // $result->close();
        // if (password_verify($password,$row[1]))
        // {
            $_SESSION['name'] = $name;
            $_SESSION['password'] = $hash;
            if (isset($_POST['rmm']) && $_POST['rmm'] == '1')
            {
                    setcookie('mycookie',$name.' '.$password,time()+3600);
            }
       
            header("location: a.php");
        }
    // else {
    //     echo "Lỗi";
    // }
    
    }

// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
            form {
                height: 300px;
                flex-direction: column;
                border-radius: 10px
            }
            input {
                outline:none;
                border: 1px solid red
            }
            label {
                font-weight: bold;
            }
        </style>
</head>
<body>
<h2 class="text-center">Đăng nhập</h2>
    <form action="login.php" method="post" class="form-group d-flex justify-content-between container border p-2">
        <!-- name-login -->
        <label for="name-login">name-login:</label>
        <input type="text" id="name-login" name="name">
        <!-- Pass -->
        <label for="password">Pass:</label>
        <input type="password" id="password" name="password">
        <div class="form-group form-check">
            <input type="checkbox" value="1" name="rmm" class="form-check-input" id="check"><label for="check">Remember Me</label>
        </div>
        <input type="submit" value="login" name="login" class="btn btn-success">
    </form>

    
</body>
</html>