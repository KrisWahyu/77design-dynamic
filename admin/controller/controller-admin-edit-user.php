<?php
include("../../config.php");

$username = $_POST['txtUsername'];
$nama = $_POST['txtNama'];
$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];
mysqli_query($conn, "update user set nama='$nama', email='$email', password='$password' where username='$username'");

if ($query->connect_errno) {
    echo "Koneksi database gagal karena" . $query->connect_error;
    exit;
} else {
    session_start();
    $_SESSION['Flash_data'] = '';
    header("Location: ../admin-user.php");
}
