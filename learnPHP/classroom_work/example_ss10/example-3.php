<?php require_once'mySQL_values.php'; 
    error_reporting(0);
    $con = new mysqli($sever, $userName, $pass, $dbName);
    // if lỗi kết nối:
    if($con->connect_error) die("Error");
    // else: truy vấn 
    $query = "select * from classics";
    $result = $con->query($query);
 
    if(!$result) die("Die error");
    // Số lượng số hàng có trong table.
    $rows = $result->num_rows;
    // Hien thi:
    for($j = 0; $j < $rows; $j++) {
        $result->data_seek($j);
        echo "Author:" . $result->fetch_assoc()['author'] . "</br>";
        $result->data_seek($j);
        echo "Title:" . $result->fetch_assoc()['title'] . "</br>";
        $result->data_seek($j);
        echo "Category:" . $result->fetch_assoc()['category'] . "</br>";
        $result->data_seek($j);
        echo "year:" . $result->fetch_assoc()['year'] . "</br>";
        $result->data_seek($j);
        echo "Isbn:" . $result->fetch_assoc()['isbn'] . "</br>";
    }

    // Ngắt knoi
    $result->close();
    $con->close();
?>