<?php
require_once "config/config.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql_login_user = "SELECT * FROM siparkir_user WHERE email = '$email' AND password = '$password'";
    $eksekusi_login_user = $db->query($sql_login_user);

    if ($eksekusi_login_user->num_rows > 0) {
        $user = $eksekusi_login_user->fetch_assoc();

        // Store session data
        $_SESSION['log-in'] = true;
        $_SESSION['email'] = $user['email'];
        $_SESSION['id_user'] = $user['id'];
        $_SESSION['level_user'] = $user['level_user'];

        // Redirect based on user level
        if ($user['level_user'] == 'superadmin') {
            echo "<script>
                alert('Berhasil login sebagai Superadmin');
                window.location = './superadmin/dashboard.php';
            </script>";
        } elseif ($user['level_user'] == 'admin') {
            echo "<script>
                alert('Berhasil login sebagai Admin');
                window.location = './admin/dashboard.php';
            </script>";
        }
        exit;
    } else {
        echo "<script>
            alert('Email atau password salah');
            window.location = 'login.php';
        </script>";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Siparkir</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css" integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/login.css?v=1.2">
</head>

<body>
    <div class="pure-g wrap-card">
        <div class="pure-u-1 pure-u-md-1-2 card-1">
            <h1>Selamat Datang di Siparkir</h1>
            <h4>Aman, Terjamin, dan Amanah untuk Parkir Kendaraan Anda</h4>
            <div style="text-align: center;">
                <img src="assets/images/parkir.png" alt="Parkir Image" class="image-responsive">
            </div>
            <form class="pure-form pure-form-stacked" action="" method="post">
                <label for="email">Masukkan Email</label>
                <input type="email" name="email" id="email" required>

                <label for="password">Masukkan Password</label>
                <input type="password" name="password" id="password" required>

                <input type="submit" name="submit" value="Login" class="pure-button pure-button-primary">
            </form>
        </div>
    </div>
</body>

</html>