<?php
session_start();
include('koneksi.php');
$id = $_GET['id'];
$stmt = mysqli_query($conn, "DELETE FROM praktikum WHERE ID_praktikum = '$id'");
header("Location: praktikum.php");
?>

