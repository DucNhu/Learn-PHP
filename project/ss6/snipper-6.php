<html>
<header>
    <title>Static Variales</title>
</header>
<body>
    <?php 
        function decrement() {
            static $static_int1 = 99;
            $static_int1--;
            echo "The decrement value is $static_int1";
        }
        decrement();
    ?>
</body>
</html>