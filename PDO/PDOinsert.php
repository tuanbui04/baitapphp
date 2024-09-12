<?php
try {
    // Kết nối tới MySQL sử dụng PDO
    $dbh = new PDO('mysql:host=localhost;dbname=melody', 'root', '');

    // Thiết lập chế độ báo lỗi cho PDO
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql_stmt = "INSERT INTO my_contacts (
        id,
        full_names,
        gender,
        contact_no,
        email,
        city,
        country
    ) VALUES (:id, :full_names, :gender, :contact_no, :email, :city, :country)";

    $stmt = $dbh->prepare($sql_stmt);

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':full_names', $full_names);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':contact_no', $contact_no);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':city', $city);
    $stmt->bindParam(':country', $country);

    $id = 12;
    $full_names = 'BAT';
    $gender = 'Male';
    $contact_no = '2611';
    $email = 'buituan2611@gmail.com';
    $city = 'bavi';
    $country = 'HN';
    $stmt->execute();

    echo "thêm thành công";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$dbh = null;
?>
