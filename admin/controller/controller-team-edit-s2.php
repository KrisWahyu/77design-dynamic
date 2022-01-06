<?php
include("../../config.php");

$judul = $_POST['txtJudulS2'];
$des = $_POST['txtDesS2'];

mysqli_query($conn, "update team set judul='$judul', deskripsi='$des' where section=2");

if ($query->connect_errno) {
    echo "Koneksi database gagal karena" . $query->connect_error;
    exit;
} else {
    session_start();
    $_SESSION['Flash_data'] = '';
    header("Location: ../admin-team.php");
}
