<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ASSETSCSS ?>output.css">
    <link rel="stylesheet" href="<?= ASSETSCSS ?>login.css">
    <title>Login Page</title>
</head>

<body>
    <div class="input">
        <h1>LOGIN</h1>
        <form action="<?= BASEURL ?>Login/authenticate" method="POST">
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
                <p>Belum punya akun?
                    <a href="<?= BASEURL ?>Register/index">Register disini</a>
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

        <p><?= isset($error) ? htmlspecialchars($error) : '' ?></p>
    </div>

    <script>
        // Display pop-up if there's an error message
        const errorMessage = "<?= isset($error) ? $error : '' ?>";
        if (errorMessage) {
            document.getElementById('errorPopup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        // Function to close pop-up
        function closePopup() {
            document.getElementById('errorPopup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    </script>
</body>

</html>
