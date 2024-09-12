<?php
$dbh = mysqli_connect('localhost', 'root', '', 'melody');
// Kết nối tới MySQL server

if (!$dbh) {
    die("Unable to connect to MySQL: " . mysqli_connect_error());
}
// Nếu kết nối thất bại thì đưa ra thông báo lỗi

$sql_stmt = "INSERT INTO `my_contacts` (
    `id`,
    `full_names`,
    `gender`,
    `contact_no`,
    `email`,
    `city`,
    `country`)
VALUES
(8, 'BAT', 'Male', '2611', 'buituan2611@gmail.com', 'bavi', 'HN')";
// Câu lệnh insert

$result = mysqli_query($dbh, $sql_stmt);
// Thực thi câu lệnh SQL

if ($result) {
    echo "Record inserted successfully.";
} else {
    echo "Error: " . mysqli_error($dbh);
}
// Kiểm tra xem việc thêm dữ liệu có thành công hay không