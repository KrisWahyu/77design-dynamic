<?php
include("../../config.php");

$judul = $_POST['txtJudulS1'];
$des = $_POST['txtDesS1'];

mysqli_query($conn, "update home set judul='$judul', deskripsi='$des' where section=1");

if ($query->connect_errno) {
    echo "Koneksi database gagal karena" . $query->connect_error;
    exit;
} else {
    session_start();
    $_SESSION['Flash_data'] = '';
    header("Location: ../admin-home.php");
}
