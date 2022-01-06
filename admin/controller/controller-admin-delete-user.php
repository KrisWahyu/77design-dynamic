<?php
include("../../config.php");
//$username = $_GET['username'];
$query = "delete from user where username ='" . $_GET["username"] . "' ";
mysqli_query($conn, $query);
mysqli_close($conn);

session_start();
$_SESSION['Flash_data'] = '';
header("Location: ../admin-user.php");
