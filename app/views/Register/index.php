<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ASSETSCSS ?>register.css">
    <link rel="stylesheet" href="<?= ASSETSCSS ?>output.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Register Page</title>
</head>

<body>
    <div class="input">
        <h1>REGISTER</h1>
        <form action="<?= BASEURL ?>Register/register" method="POST">
            <div class="box-input">
                <i class="fas fa-user"></i>
                <input type="text" name="namalengkap" placeholder="Nama Lengkap" required>
            </div>
            <div class="box-input">
                <i class="fas fa-id-card"></i>
                <input type="text" name="nim" placeholder="NIM" maxlength="9" required>
            </div>
            <div class="flex text-center gap-5 ml-2">
                <input type="radio" id="inf" name="prodi" value="Informatika" required class="ml-5 mb-5">
                <label for="inf">Informatika</label>
                <input type="radio" id="tekkom" name="prodi" value="Teknik Komputer" required class="ml-5 mb-5">    
                <label for="tekkom" class="mb-5">Teknik Komputer</label>
            </div>
            <div class="box-input">
                <i class="fas fa-envelope-open-text"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="box-input">
                <i class="fas fa-lock"></i>
                <input type="password" name="confirmpw" placeholder="Confirm Password" required>
            </div>
            <button type="submit" name="register" class="btn-input">Register</button>
            <div class="bottom">
                <p>Apakah sudah punya akun?
                    <a href="<?= BASEURL ?>Login/index">Login disini</a>
                </p>
            </div>
        </form>

        <!-- Show error message if any -->
        <?php if (isset($error)) : ?>
            <div class="error-message"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
    </div>
</body>

</html>
            