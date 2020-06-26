<html>
<body>
    <?php 
        $x = array();
        $y = array();
        echo 'array() '. '<==>'. 'array()'. ' Returns ', $x <=> $y, '</br>';
        //
        $m = array(1,2,3);
        $n = array(1,2,3);
        $p = array(1,2,1);
        $q = array(1,2,4);
        echo 'array(1,2,3) ', '<==>', 'array()', ' Returns ', $m <=> $x, '</br>';
        //
        echo 'array(1,2,3) ', '<==>', 'array(1,2,4)', ' Returns ', $m <=> $q, '</br>';
        
    ?>
</body>
</html>