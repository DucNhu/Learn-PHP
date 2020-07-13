<html>
<body>
    <form action="example-1.php" method="get">
        Enter ur name:
        <input type="text" name="urname">
        Enter userName:
        <input type="text" name="name">
        Enter password:
        <input type="password" name="pss">
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php 
    if(isset($_GET['submit'])) {
        $con = new mysqli("localhost", "root", "", "mysqlitest");
        echo "";
        if($con) {
        $urname = $_GET['urname'];
        $name = $_GET['name'];
        $pass = $_GET['pss'];
        $select = "insert into mytable value '$urname','$name','$pass'";
        $con->query($select);
        echo "create 100%";
        }
        else {
            exit("Connect 0%");
        }
    }
    else {
        
    }
?>