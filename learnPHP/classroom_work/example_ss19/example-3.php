<?php 
    $con = new mysqli("localhost", "root", "", "mysqlitest");

    if($con->connect_error) die("Connect to mysqli Error");
    $query = "Create table users(
        forename varchar(32) not null,
        surname varchar(32) not null,
        username varchar(32) not null unique,
        password varchar(255) not null)";

        // $result = $con->query($query);
        // if(!$result) die(
        //     '<p style="color: red; padding: 5px; border: 1px solid red">Username / pass combination</p>'
        // );
        $forename = 'Duc';
        $surname = 'Nhu';
        $username = 'Ducnhudaik';
        $pass = 'dn';
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        add_user($con, $forename, $surname, $username, $hash);

        $forename = 'Duc';
        $surname = 'Nhu';
        $username = 'Ducnhudaikd';
        $pass = 'dn';
        $hash = password_hash($pass, PASSWORD_DEFAULT);
        add_user($con, $forename, $surname, $username, $hash);

        function add_user($con, $f, $s, $u, $p) {
            $stmt = $con->prepare('insert into users values(?,?,?,?)');
            $stmt->bind_param('ssss', $f, $s, $u, $p);
            $stmt->execute();
            $stmt->close();
        }
?>