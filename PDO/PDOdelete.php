<?php
try {
    // Kết nối tới MySQL sử dụng PDO
    $dbh = new PDO('mysql:host=localhost;dbname=melody', 'root', '');

    // Thiết lập chế độ báo lỗi cho PDO
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Chuẩn bị câu lệnh SQL với placeholder
    $sql_stmt = "DELETE FROM my_contacts WHERE id = :id";

    // Chuẩn bị câu lệnh
    $stmt = $dbh->prepare($sql_stmt);

    // Gán giá trị cho tham số
    $stmt->bindParam(':id', $id);

    // Gán giá trị thực tế cho biến
    $id = 12;  // Ví dụ xóa bản ghi có `id = 8`

    // Thực thi câu lệnh
    $stmt->execute();

    echo "deleted successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Đóng kết nối
$dbh = null;
?>
