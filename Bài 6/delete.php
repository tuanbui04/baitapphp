<?php
$dbh = mysqli_connect('localhost', 'root', '', 'melody');
// Kết nối tới MySQL server

if (!$dbh) {
    die("Unable to connect to MySQL: " . mysqli_connect_error());
}
// Nếu kết nối thất bại thì đưa ra thông báo lỗi

$sql_stmt = "DELETE FROM `my_contacts`";
$sql_stmt .= "WHERE `id` = 5";

$result = mysqli_query($dbh, $sql_stmt);
// Thực thi câu lệnh SQL

if ($result) {
    echo "xóa thành công";
} else {
    echo "Error: " . mysqli_error($dbh);
}

?>