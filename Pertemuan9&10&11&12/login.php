<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Menggunakan prepared statement untuk menghindari SQL injection
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $cek = $result->num_rows;

    if ($cek > 0 && password_verify($password, $row['password'])) {
        $_SESSION['login'] = true;
        $_SESSION['user'] = $row['nama_lengkap'];
        header('location: dashboard.php');
        exit;
    } else {
        $_SESSION['pesan'] = 'Username/Password salah';
        header('location: login.php');
        exit;
    }
} else {
    header('location: index.php');
}
?>