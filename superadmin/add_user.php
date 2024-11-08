<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link href="../assets/CSS/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../assets/CSS/add_user.css">
<?php add_user();?>

<div class="main-content">
    <header>
        <h2>Add User<span>Control Panel</span></h2>
        <a href="../logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>    

    <!-- ruang kreasi developer -->
     <div class="container">
        <h2>Tambah Pengguna Baru</h2>
        
        <form action="" method="POST">
    <div class="form-group">
        <label>Name</label>
        <input type="text" name="nama" required>
    </div>
    
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" required>
    </div>

    <div class="form-group">
        <label>Nomor Whatasapp</label>
        <input type="number" name="no_wa" required>
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
        <a href="halaman_profil.php" class="cancel-button">Cancel</a>
    </div>
</form>

    </div>
    <!-- end kreasi development section -->
</div>

<?php include 'footer.php'; ?>