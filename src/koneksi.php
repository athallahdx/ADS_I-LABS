<?php
$servername = "localhost";
$database = "ilabs";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
