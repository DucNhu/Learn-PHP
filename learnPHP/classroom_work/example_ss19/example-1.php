<?php 
    if(isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
        echo "WEl come user: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) . " pass: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']);
    }
    else {
        header('WWW-Authenticate: Basic realm="Restricted Area"');
        header("HTTP/1.0 401 Unauthorrized");
        die("Ples enter ur username and pass");
    }
?>