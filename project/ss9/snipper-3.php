<html>
        <link rel="stylesheet" href="../css/example.css">

<body>
    <h3>Check ur Grade:</h3>
        <form action="snipper-3.php" method="get">
            Enter ur Percentage
            <input type="text" name="name">
            <input type="submit" name="grade" value="submit">
        </form>
</body>
</html>
<?php 
    $a = $_GET['name'];
    if($a > 60) {
        echo "Conga";
    }
    else if($a <60 && $a > 40) {
        echo "Conga";
    }
    else {
        echo "sorry";
    }
?>