<?php
include("../../config.php");

if (isset($_POST["submit"])) {

    // $nama        = $_POST["nama"];
    //$file_name   = $_FILES["file"]["name"];
    $tmp_name   = $_FILES["file"]["tmp_name"];

    $temp = explode(".", $_FILES["file"]["name"]);
    $newfilename = round(microtime(true)) . '.' . end($temp);
    if (empty($tmp_name)) {
        echo "<script>alert('Kosong');history.go(-1)</script>";
    } else {
        move_uploaded_file($tmp_name, "../../assets/images/" . $newfilename);
        $sql = "INSERT INTO `service` (`nama`,`deskripsi`,`file`,section)";
        $sql .= " VALUES ('" . $_POST["txtNama"] . "','" . $_POST["txtDes"] . "','" . $newfilename . "','1')";
        $query = mysqli_query($conn, $sql) or exit("Error query : <b>" . $sql . " </b>.");
    }
    if ($query->connect_errno) {
        echo "Koneksi database gagal karena" . $query->connect_error;
        exit;
    } else {
        session_start();
        $_SESSION['Flash_data'] = '';
        header("Location: ../admin-service.php");
    }
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>