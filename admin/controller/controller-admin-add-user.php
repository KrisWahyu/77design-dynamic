<?php
include("../../config.php");
if ($_POST['txtPassword'] == $_POST['txtRetypepass']) {

    $sql = "INSERT INTO user(username,nama,email,password)";
    $sql .= "VALUES ('" . $_POST['txtUsername'] . "','" . $_POST['txtNama'] . "','" . $_POST['txtEmail'] . "','" . $_POST['txtPassword'] . "')";
    $query = mysqli_query($conn, $sql) or exit("Error query : <b>" . $sql . "</b>.");

    if ($query->connect_errno) {
        echo "Koneksi database gagal karena" . $query->connect_error;
        exit;
    } else {
        session_start();
        $_SESSION['Flash_data'] = '';
        header("Location: ../admin-user.php");
    }
} else {
    echo "<script>alert('Password yang Anda Masukan Tidak Sama');history.go(-1)</script>";
}
