<?php
// index.php
// define('DB_HOST', 'localhost');  // Ganti dengan host database jika diperlukan
// define('DB_USER', 'root');       // Ganti dengan username database Anda
// define('DB_PASS', '');           // Ganti dengan password database Anda
// define('DB_NAME', 'db_siparkir'); // Ganti dengan nama database Anda

// // Fungsi untuk membuka koneksi database
// function db_connect() {
//     $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//     // Cek apakah ada error pada koneksi
//     if ($conn->connect_error) {
//         die("Connection failed: " . $conn->connect_error);
//     }

//     return $conn;
// }


// // Fungsi untuk menutup koneksi database
// function db_close($conn) {
//     $conn->close();
// }


// function get_user_by_id($id) {
//     $conn = db_connect();  // Koneksi ke database
//     $sql = "SELECT * FROM siparkir_user WHERE id = $id"; // Menggunakan $id langsung dalam query

//     $result = $conn->query($sql);
//     $user = $result->fetch_assoc();

//     db_close($conn);  // Menutup koneksi database

//     return $user;
// }



// $id = $_GET['id']; // Ambil ID dari URL
// $user = get_user_by_id($id); // Ambil data pengguna berdasarkan ID

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // Ambil data dari form
//     $nama = $_POST['nama'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $level_user = $_POST['level_user'];

//     // Edit pengguna
//     $result = edit_user($id, $nama, $email, $password, $level_user);

//     if ($result) {
//         header("Location: index.php");  // Redirect ke halaman daftar pengguna
//     } else {
//         echo "Gagal mengupdate pengguna.";
//     }
// }


// function edit_user($id, $nama, $email, $password, $level_user) {
//     $conn = db_connect();  // Koneksi ke database

//     // Jika password diubah, hash password terlebih dahulu
//     $hashed_password = password_hash($password, PASSWORD_DEFAULT);

//     // Query dengan concatenation (perhatikan potensi SQL Injection)
//     $sql = "UPDATE siparkir_user SET 
//                 nama = '$nama', 
//                 email = '$email', 
//                 password = '$hashed_password', 
//                 level_user = '$level_user' 
//             WHERE id = $id";

//     // Eksekusi query
//     $success = $conn->query($sql);
//     db_close($conn);  // Menutup koneksi database

//     return $success;
// }

?>

<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link rel="stylesheet" href="../assets/CSS/edit_user.css">
<link href="../assets/CSS/style.css" rel="stylesheet" type="text/css">



<div class="main-content">
    <header>
        <h2>Dashboard <span>Control Panel</span></h2>
        <a href="../logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>

    <!-- ruang kreasi developer -->
    <div class="container">
        <h2>Edit Pengguna</h2>

        <form action="edit_user.php?id=<?php echo $user['id']; ?>" method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="nama" value="<?php echo htmlspecialchars($user['nama']); ?>" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>

            <div class="form-group">
                <label>User Level</label>
                <div class="radio-group">
                    <div class="radio-option">
                        <input type="radio" name="level_user" value="administrator" <?php echo ($user['level_user'] == 'administrator') ? 'checked' : ''; ?> required>
                        <label for="admin">Administrator</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" name="level_user" value="operator" <?php echo ($user['level_user'] == 'operator') ? 'checked' : ''; ?> required>
                        <label for="operator">Operator</label>
                    </div>
                </div>
            </div>

            <div class="form-buttons">
                <button type="submit">Save Changes</button>
                <a href="halaman_profil.php" class="cancel-button">Cancel</a>
            </div>
        </form>
    </div>
    <!-- end kreasi development section -->
</div>

<?php include 'footer.php'; ?>