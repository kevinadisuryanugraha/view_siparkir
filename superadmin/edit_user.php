<?php 
include 'header.php';
include 'sidebar.php';

// Ambil ID dari parameter URL
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$user = get_user_by_id($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_wa = $_POST['no_wa'];
    $password = $_POST['password'];
    $level_user = $_POST['level_user'];

    // Update data pengguna
    if (edit_user($id, $nama, $email, $no_wa, $password, $level_user)) {
        echo "<script>
        alert('Data Berhasil Di ubah');
        window.location = 'halaman_profil.php';
        </script>";
    } else {
        echo "<script>
        alert('Data Gagal Di ubah');
        window.location = 'edit_user.php';
        </script>";
    }
}
?>

<link rel="stylesheet" href="../assets/CSS/edit_user.css">
<link href="../assets/CSS/style.css" rel="stylesheet" type="text/css">

<div class="main-content">
    <header>
        <h2>Dashboard <span>Control Panel</span></h2>
        <a href="../logout.php" class="logout-btn"  onclick="return confirm('yakin ingin keluar??')"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
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
                <label>Nomor Whatsapp</label>
                <input type="number" name="no_wa" value="<?php echo htmlspecialchars($user['no_wa']); ?>" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password">
                <small>Kosongkan jika tidak ingin mengubah password</small>
            </div>

            <div class="form-group">
                <label>User Level</label>
                <div class="radio-group">
                    <div class="radio-option">
                        <input type="radio" name="level_user" value="superadmin" <?php echo ($user['level_user'] == 'superadmin') ? 'checked' : ''; ?> required>
                        <label for="superadmin">superadmin</label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" name="level_user" value="admin" <?php echo ($user['level_user'] == 'admin') ? 'checked' : ''; ?> required>
                        <label for="admin">admin</label>
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
