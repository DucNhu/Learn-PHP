<?php 
    $username = 'test'; $pass = '123';

    if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
        echo "WEl come user: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . " pass: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']);
        if($_SERVER['PHP_AUTH_USER'] === $username && $_SERVER['PHP_AUTH_PW'] === $pass) 
        echo '
            <p style="color: green; padding: 5px; border: 1px solid green">U are now logged in</p>
        ';
        else
        die(
            '
            <p style="color: red; padding: 5px; border: 1px solid red">Username / pass combination</p>
            '
        );
    }
    else {
        header('WWW-Authenticate: Basic realm="Restricted Area"');
        header("HTTP/1.0 401 Unauthorrized");
        die("Ples enter ur username and pass");
    }
?>