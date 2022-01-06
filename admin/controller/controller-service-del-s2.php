<?php
include "../../config.php";
$file = $_GET["file"];
$i = mysqli_query($conn, "SELECT * FROM `service` WHERE file ='$file' and section = 2");
$u = mysqli_fetch_array($i);

if (is_file("../../assets/images/" . $u['file'])) unlink("../../assets/images/" . $u['file']);
$sql = "DELETE FROM  `service` WHERE file='$file' and section = 2";
$query = mysqli_query($conn, $sql);
mysqli_close($conn);

if ($query->connect_errno) {
    echo "Koneksi database gagal karena" . $query->connect_error;
    exit;
} else {
    session_start();
    $_SESSION['Flash_data'] = '';
    header("Location: ../admin-service.php");
}

?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>