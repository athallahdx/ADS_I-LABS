<?php
session_start();
include('koneksi.php');
$id = $_GET['id'];
$stmt = mysqli_query($conn, "DELETE FROM tugas WHERE ID_tugas = '$id'");
header("Location: tugas.php");
?>

