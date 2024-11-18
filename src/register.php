<?php
require 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $namalengkap = $_POST["namalengkap"];
    $nim = $_POST["nim"];
    $prodi = $_POST["prodi"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Insert data ke tabel dengan prepared statement untuk mencegah SQL Injection
    $query_sql = "INSERT INTO db_inflabs.tbl_users (namalengkap, nim, prodi, email, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query_sql);
    mysqli_stmt_bind_param($stmt, "sssss", $namalengkap, $nim, $prodi, $email, $password);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Pendaftaran Gagal : " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleu.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Register Page</title>
</head>

<body>
    <div class="input">
        <h1>REGISTER</h1>
        <form action="" method="POST">
            <div class="box-input">
                <i class="fas fa-user"></i>
                <input type="text" name="namalengkap" placeholder="Nama Lengkap" required>
            </div>
            <div class="box-input">
                <i class="fas fa-id-card"></i>
                <input type="text" name="nim" placeholder="NIM" maxlength="9" required>
            </div>
            <div class="box-input">
                <i class="fas fa-graduation-cap"></i>
                <input type="text" name="prodi" placeholder="Program Studi" required>
            </div>
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="register" class="btn-input">Register</button>
            <div class="bottom">
                <p>Apakah sudah punya akun?
                    <a href="index.php">Login disini</a>
                </p>
            </div>
        </form>
    </div>
</body>

</html>
