<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link rel="stylesheet" href="assets/CSS/style.css">
<div class="main-content">
    <header>
        <h2>Dashboard <span>Control Panel</span></h2>
        <a href="#" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>    

    <!-- ruang kreasi developer -->
    <div class="dashboard">
        <section class="stats-grid">
            <div class="card green">
                <div class="card-icon"><i class="fas fa-car"></i></div>
                <h3>9</h3>
                <p>Jenis Kendaraan</p>
            </div>
            <div class="card orange">
                <div class="card-icon"><i class="fas fa-user-plus"></i></div>
                <h3>2</h3>
                <p>Pengguna</p>
            </div>
            <div class="card blue">
                <div class="card-icon"><i class="fas fa-car-side"></i></div>
                <h3>0</h3>
                <p>Kendaraan Masuk Hari Ini</p>
            </div>
            <div class="card blue">
                <div class="card-icon"><i class="fas fa-car"></i></div>
                <h3>13</h3>
                <p>Kendaraan Masuk Tahun Ini</p>
            </div>
            <div class="card green">
                <div class="card-icon"><i class="fas fa-dollar-sign"></i></div>
                <h3>4,450,000</h3>
                <p>Pemasukan Tahun Ini</p>
            </div>
            <div class="card green">
                <div class="card-icon"><i class="fas fa-dollar-sign"></i></div>
                <h3>4,450,000</h3>
                <p>Total Pemasukan</p>
            </div>
        </section>
    </div>
    <!-- end kreasi development section -->
</div>

<?php include 'footer.php'; ?>