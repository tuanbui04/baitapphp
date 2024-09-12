<?php
try {
    // Kết nối tới MySQL sử dụng PDO
    $dbh = new PDO('mysql:host=localhost;dbname=melody', 'root', '');

    // Thiết lập chế độ báo lỗi cho PDO
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Chuẩn bị câu lệnh SQL với placeholders
    $sql_stmt = "UPDATE my_contacts SET 
        full_names = :full_names,
        gender = :gender,
        contact_no = :contact_no,
        email = :email,
        city = :city,
        country = :country
    WHERE id = :id";

    // Chuẩn bị câu lệnh
    $stmt = $dbh->prepare($sql_stmt);

    // Gán giá trị cho các tham số
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':full_names', $full_names);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':contact_no', $contact_no);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':country', $country);

    // Gán giá trị thực tế cho các biến
    $id = 8;
    $full_names = 'BAT Updated';
    $gender = 'Male';
    $contact_no = '9999';
    $email = 'updated_email@gmail.com';
    $city = 'updated_city';
    $country = 'updated_country';

    // Thực thi câu lệnh
    $stmt->execute();

    echo "updated successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Đóng kết nối
$dbh = null;
?>
