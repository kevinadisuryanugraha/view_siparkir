<?php
// index.php
define('DB_HOST', 'localhost');  // Ganti dengan host database jika diperlukan
define('DB_USER', 'root');       // Ganti dengan username database Anda
define('DB_PASS', '');           // Ganti dengan password database Anda
define('DB_NAME', 'db_siparkir'); // Ganti dengan nama database Anda

// Fungsi untuk membuka koneksi database
function db_connect() {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    // Cek apakah ada error pada koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}


// Fungsi untuk menutup koneksi database
function db_close($conn) {
    $conn->close();
}
function get_all_users() {
    $conn = db_connect();  // Koneksi ke database
    $sql = "SELECT * FROM siparkir_user";
    $result = $conn->query($sql);

    $users = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;
        }
    }

    db_close($conn);  // Menutup koneksi database
    return $users;
}
// Ambil semua pengguna
$users = get_all_users();
?>

<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link href="../assets/CSS/dashboard.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="assets/CSS/daftar_pengguna.css">
<link rel="stylesheet" href="assets/CSS/include_1.css">


<div class="main-content">
    <header>
        <h2>Dashboard <span>Control Panel</span></h2>
        <a href="#" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>    

    <!-- ruang kreasi developer -->
    <div class="container">
        <h2>Daftar Pengguna</h2>
        <div class="header">
            <a href="add_user.php" class="add-button">+ Tambah Pengguna Baru</a>
            <div class="search">
                <input type="text" id="search" placeholder="Cari pengguna...">
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>LEVEL</th>
                    <th>OPSI</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($users as $user): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo htmlspecialchars($user['nama']); ?></td>
                    <td><?php echo htmlspecialchars($user['email']); ?></td>
                    <td><?php echo htmlspecialchars($user['level_user']); ?></td>
                    <td>
                        <a href="edit_user.php?id=<?php echo $user['id']; ?>" class="edit-btn"> Edit</a>
                        <!-- Tombol Hapus dengan konfirmasi -->
                        <a href="#" class="delete-btn" onclick="confirmDelete(<?php echo $user['id']; ?>)"> Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
  
</div>

<?php include 'footer.php'; ?>