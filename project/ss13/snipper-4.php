<html>
    <link rel="stylesheet" href="../css/example.css">
<body>
    <b>Simple</b>
    <form action="snipper-4.php" method="get">
        <input type="text" name="n2text">
        <input type="text" name="n3text">
        <input type="text" name="n4text">
        <input type="submit" name="cal" value="calculate">
    </form>
</body>
</html>
<?php 
    $p = $_GET['n2text'];
    $r = $_GET['n3text'];
    $n = $_GET['n4text'];
    $si = ($p * $r * $n) / 100;
    echo "The cal: $si";
?>