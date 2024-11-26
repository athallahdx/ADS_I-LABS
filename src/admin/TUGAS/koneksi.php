<?php

$conn = mysqli_connect("localhost", "root", "", "db_inflabs");

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
