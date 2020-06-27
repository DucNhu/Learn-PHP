<html>
<header>
    <title>Global Variables</title>
</header>
<body>
    <?php 
        $int1 = 69;
        $int2 = 50;
        function division() {
            global $int1, $int2;
            $int3 = $int1 / $int2;
            echo  "The quoient for $int1 / $int2 = $int3";
        }
        division();
    ?>
</body>
</html>