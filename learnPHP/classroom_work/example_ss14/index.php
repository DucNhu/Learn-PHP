<?php 
session_start();
error_reporting(0);
?>
<html>
<body>
    <h1 style="text-align: center">Hello <?php echo $_SESSION['username'] ?></h1>
    <form action="index.php" method="post">
    <input type="submit" value="out" name="out">
    </form>
</body>
</html>
<?php 
    // if(isset($_POST['out'])) 
    //     session_destroy();
    //     header('location: index.php');
    
?>