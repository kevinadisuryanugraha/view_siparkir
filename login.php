<?php

// include 'header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $email && $password === $password) {
        $_SESSION['email'] = $email;
        echo "<script>
            alert('Berhasil login, Silahkan Parkirkan Kendaraan anda ditempat yang telah disediakan');
            window.location='dashboard.php';
        </script>";
        exit;
    } 
    else
    {
        echo "<script>
            alert('Email atau password salah');
            window.location='login.php';
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css"
        integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/CSS/login.css">
</head>

<body>
    <div class="pure-g wrap-card">
        <div class="pure-u-1 pure-u-md-1-2 card-1">
            <h1>Selamat Datang di Siparkir</h1>
            <h4>Silahkan Parkirkan Kendaraan Anda. <br> Aman, Terjamin dan Amanah</h4>
            <div style="text-align: center;">
                <img src="assets/images/parkir.png" alt="Library Image" style="max-width: 50%; margin-top: 10px;">
            </div>
            <form class="pure-form pure-form-stacked" action="dashboard.php" method="post">
                <label for="email">Masukkan Email</label>
                <input type="email" name="email" id="email" required>

                <label for="password">Masukkan Password</label>
                <input type="password" name="password" id="password" required>

                <input type="submit" name="submit" value="Login" class="pure-button pure-button-primary">
                <br>
            </form>
        </div>
    </div>
</body>

</html>