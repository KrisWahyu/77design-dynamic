<?php
include("../../config.php");

include 'config.php';
$sqlC = "SELECT * FROM view ";
$hasilC = mysqli_query($conn, $sqlC) or exit("Error query: <b>" . $sqlC . "</b>.");
$dataC = mysqli_fetch_assoc($hasilC);
if ($dataC['status'] == 1) {

    mysqli_query($conn, "update view set status=0");

    if ($query->connect_errno) {
        echo "Koneksi database gagal karena" . $query->connect_error;
        exit;
    } else {

        header("location: admin/admin-user.php");
    }
} else if ($dataC['status'] == 0) {


    mysqli_query($conn, "update view set status=1");

    if ($query->connect_errno) {
        echo "Koneksi database gagal karena" . $query->connect_error;
        exit;
    } else {

        header("location: admin/admin-user.php");
    }
}
