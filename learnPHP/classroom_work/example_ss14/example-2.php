<?php
$conn = new mysqli("localhost","root","","publications");
if($conn -> connect_errno) die("Connect DB error");
echo <<<_END
<form action = "example-2.php.php" method = "POST"><pre>
Author   <input type="text" name="author"><br>
Title    <input type="text" name="title"><br>
Category <input type="text" name="category"><br>
Year     <input type="text" name="year"><br>
ISBN     <input type="text" name="isbn"><br>
         <input type="submit" value="add record">
</pre></form>
_END;
$query = "select * from classics";
$result = $conn -> query($query);
if (!$result) die("Database access failed");
$rows = $result->num_rows;
for ($j = 0; $j < $rows; ++$j)
{
    $row = $result -> fetch_array(MYSQLI_NUM);
    $r0 = $row[0];
    $r1 = $row[1];
    $r2 = $row[2];
    $r3 = $row[3];
    $r4 = $row[4];
echo  <<<_END
<pre>
Author   $r0
Title    $r1
Category $r2
Year     $r3
ISBN     $r4
</pre>
<form action="example-2.php.php" method="post"
<input type="hidden" name="delete" value="yes">
<input type="hidden" name="isbn" value="$r4">
<input type="submit" value="DELETE RECORD"></form>
_END;
}
$result->close();
$conn->close();
function get_post($conn, $var)
{
    return $conn -> real_escape_string($_POST[$var]);
}
?>
