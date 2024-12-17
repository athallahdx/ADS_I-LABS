<?php
session_start();
require 'koneksi.php';

$message = ""; // Variabel untuk menyimpan pesan kesalahan

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = "Praktikan";

    // Menggunakan prepared statement untuk mencegah SQL Injection
    $stmt = $conn->prepare("SELECT * FROM user WHERE (email = ? OR username = ?) AND password = ? AND role = 'Praktikan'");
    $stmt->bind_param("sss", $email, $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($role !== "Praktikan") {
        $message = "Anda bukan praktikan.";
        exit();
    } 

    if ($result->num_rows > 0) {
        // Ambil data pengguna
        $user = $result->fetch_assoc();

        // Simpan data ke dalam session
        $_SESSION['namalengkap'] = $user['namalengkap'];
        $_SESSION['nim'] = $user['nim'];
        $_SESSION['prodi'] = $user['prodi'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['username'] = $user['username'];

        // Redirect ke halaman dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        $message = "Email atau Password Anda salah. Silakan coba lagi.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/login.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    
    <title>Login Page</title>
</head>
<body>
  
    <div class="input">
        <h1>LOGIN</h1>
        <form action="" method="POST">
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="text" name="email" placeholder="Email or Username" required>
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit" name="login" class="btn-input">Login</button>
            <div class="bottom">
                <p>Belum punya akun kan?
                    <a href="register.php">Register disini</a>
                </p>
            </div>
        </form>
    </div>


    <!-- Overlay -->
    <div id="overlay" class="overlay" onclick="closePopup()"></div>

    <!-- Popup modal -->
    <div id="errorPopup" class="popup">
        <div class="close-btn">
            <button onclick="closePopup()">×</button>
        </div>

        <p><?= htmlspecialchars($message) ?></p>
    </div>

    <script>
        // Menampilkan pop-up jika ada pesan kesalahan
        const errorMessage = "<?= $message ?>";
        if (errorMessage) {
            document.getElementById('errorPopup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        // Fungsi untuk menutup pop-up
        function closePopup() {
            document.getElementById('errorPopup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    </script>
</body>

</html>
