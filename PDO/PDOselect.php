<?php
try {
    // Kết nối tới MySQL sử dụng PDO
    $dbh = new PDO('mysql:host=localhost;dbname=melody', 'root', '');

    // Thiết lập chế độ báo lỗi cho PDO
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Chuẩn bị câu lệnh SQL để lấy dữ liệu
    $sql_stmt = "SELECT * FROM my_contacts";

    // Thực thi câu lệnh và lấy dữ liệu
    $stmt = $dbh->query($sql_stmt);

    // Kiểm tra nếu có dữ liệu trả về
    if ($stmt->rowCount() > 0) {
        // Lặp qua các bản ghi trả về
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $row['id'] . "<br>";
            echo "Full Name: " . $row['full_names'] . "<br>";
            echo "Gender: " . $row['gender'] . "<br>";
            echo "Contact No: " . $row['contact_no'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";
            echo "City: " . $row['city'] . "<br>";
            echo "Country: " . $row['country'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "No records found.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Đóng kết nối
$dbh = null;
?>
