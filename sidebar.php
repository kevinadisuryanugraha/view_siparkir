<aside class="sidebar">
    <h1 class="sidebar-header">E-Parking</h1>
    <div class="profile">
        <img src="https://via.placeholder.com/50" alt="Profile Picture">
        <style>
            /* Sidebar Styles */
.sidebar {
    width: 250px;
    background-color: #2e7d32;
    color: white;
    display: flex;
    flex-direction: column;
    padding: 20px;
}

.sidebar-header {
    font-size: 24px;
    text-align: center;
    margin-bottom: 20px;
    font-weight: bold;
}

.profile {
    text-align: center;
    margin-bottom: 20px;
}

.profile img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-bottom: 10px;
}

.profile h2 {
    font-size: 16px;
}

.profile p {
    font-size: 14px;
    opacity: 0.8;
}

.sidebar nav a {
    display: flex;
    align-items: center;
    color: white;
    text-decoration: none;
    padding: 10px 0;
    font-size: 16px;
    transition: background-color 0.3s ease, padding-left 0.3s ease; /* Menambahkan transisi pada background-color dan padding-left */
}

.sidebar nav a i {
    margin-right: 10px;
}

.sidebar nav a:hover {
    background-color: #1b5e20;
    padding-left: 15px; /* Menambahkan padding lebih besar saat hover untuk efek lebih halus */
}

        </style>
        <h2>Habib</h2>
        <p>Santri</p>
    </div>
    <nav>
        <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="jenis_kendaraan.php"><i class="fas fa-dollar-sign"></i> Biaya Parkir</a>
        <a href="halaman_profil.php"><i class="fas fa-users"></i> Data Pengguna</a>
        <a href="kendaraan_masuk.php"><i class="fas fa-car"></i> Kendaraan Masuk</a>
        <a href="laporan_parkir.php"><i class="fas fa-file-alt"></i> Laporan Parkir</a>
        <a href="kendaraan_keluar.php"><i class="fas fa-car"></i> Kendaraan Keluar</a>
        <a href="ganti_password.php"><i class="fas fa-key"></i> Ganti Password</a>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </nav>
</aside>
