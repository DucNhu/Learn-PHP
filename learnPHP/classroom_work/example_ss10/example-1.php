<!-- create database -->
<?php 
    try {
        $con = new PDO("mysql:host=localhost;dbname=publications","root", "");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // $con->exec("create database publications");
        // echo "create db 100%";

        // classics

    // $con = new PDO("mysql:host=localhost;dbname=publications","root", "");
    // $con->exec("create table classics(
    //     Name varchar(200), 
    //     author varchar(200),
    //     title varchar(200),
    //     category varchar(50),
    //     year smallint,
    //     isbn char(13)
    // )");
    // echo "db classics 50%";
    
    // Customers

    // $con->exec("create table customers(
    //     Name varchar(200), 
    //     isbn varchar(200)
    // )");
    // echo "create table customers 100%";

    // Insert into value table classics
    // $con->exec("insert into classics values
    // ('DN','Mark Twain','The adventures of Tom Sawyer','Fiction', 1876, 573233)
    // ");
    // echo "Insert table classics 100%";

    // Insert into value table customers
    $con->exec("insert into customers values
    ('Ducnhu', 'Daik')");
    echo "Insert table customers 100%";

}
    catch(PDOException $s) {
        echo $s->getMessage();
    }
?>