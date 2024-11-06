<?php
// index.php
// define('DB_HOST', 'localhost');  // Ganti dengan host database jika diperlukan
// define('DB_USER', 'root');       // Ganti dengan username database Anda
// define('DB_PASS', '');           // Ganti dengan password database Anda
// define('DB_NAME', 'db_siparkir'); // Ganti dengan nama database Anda

// // Fungsi untuk membuka koneksi database
// function add_user($nama, $email, $password, $level_user) {
//     // Memastikan koneksi ke database
//     $conn = db_connect();  // Koneksi ke database

//     // Pastikan level_user adalah salah satu nilai yang valid dari ENUM
//     $valid_levels = ['superadmin', 'admin'];
//     if (!in_array($level_user, $valid_levels)) {
//         echo "Level user tidak valid.";
//         return false;
//     }

//     // Hash password
//     $hashed_password = password_hash($password, PASSWORD_DEFAULT);

//     // Query dengan concatenation (perhatikan potensi SQL Injection)
//     $sql = "INSERT INTO siparkir_user (nama, email, password, level_user) 
//             VALUES ('$nama', '$email', '$hashed_password', '$level_user')";

//     // Eksekusi query
//     if ($conn->query($sql) === TRUE) {
//         return true;  // Berhasil menambah user
//     } else {
//         return false;  // Gagal menambah user
//     }

//     // Tutup koneksi
//     $conn->close();
//     return false;
// }       

?>

<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link href="../assets/CSS/dashboard.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="assets/CSS/add_user.css">
<link rel="stylesheet" href="assets/CSS/include_1.css">


<div class="main-content">
    <header>
        <h2>Dashboard <span>Control Panel</span></h2>
        <a href="#" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>    

    <!-- ruang kreasi developer -->
     <div class="container">
        <h2>Tambah Pengguna Baru</h2>
        
        <form action="add_user.php" method="POST">
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="nama" required>
    </div>
    
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" required>
    </div>
    
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" required>
    </div>

    <div class="form-group">
        <label>User Level</label>
        <div class="radio-group">
            <div class="radio-option">
                <input type="radio" name="level_user" value="superadmin" required>
                <label for="superadmin">Super Admin</label>
            </div>
            <div class="radio-option">
                <input type="radio" name="level_user" value="admin" required>
                <label for="admin">Admin</label>
            </div>
        </div>
    </div>
    
    <div class="form-buttons">
        <input type="submit" value="Add User">
        <a href="daftar_pengguna.php" class="cancel-button">Cancel</a>
    </div>
</form>

    </div>
    <!-- end kreasi development section -->
</div>

<?php include 'footer.php'; ?>