<?php
include 'config.php';
$sqlC = "SELECT * FROM view ";
$hasilC = mysqli_query($conn, $sqlC);
$dataC = mysqli_fetch_assoc($hasilC);

if ($dataC['status'] == 0) {
    header("location: maintenance.php");
    exit;
}
