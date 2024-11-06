<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<link rel="stylesheet" href="assets/CSS/halaman_profil.css">
<link rel="stylesheet" href="assets/CSS/style.css">

<div class="main-content">
    <header>
        <h2>Data Pengguna<span>Control Panel</span></h2>
        <a href="#" class="logout-btn"><i class="fas fa-sign-out-alt"></i> LOGOUT</a>
    </header>    
    
    <!-- ruang kreasi developer -->
    <div class="card-profil">
        <div class="card-profil-header">
            <a href="add_user.php" class="pure-button-primary pure-button">Tambah Profil</a>
        </div>
        <div class="card-profil-content">
            <table id="profil" class="cell-border" >
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Nomor Whatsapp</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php ?>
                    <tr>
                        <td>1</td>
                        <td>superadmin</td>
                        <td>superadmin@gmail.com</td>
                        <td>08922173813</td>
                        <td>superadmin</td>
                        <td><a href="edit_user.php" class="icon-box"> <i class="fa fa-gear"></i></a>| <a href="" class="icon-box"> <i class="fa fa-trash icon-color"></i></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>admin</td>
                        <td>admin@gmail.com</td>
                        <td>0892173813</td>
                        <td>admin</td>
                        <td><a href="edit_user.php" class="icon-box"> <i class="fa fa-gear"></i></a>| <a href="" class="icon-box"> <i class="fa fa-trash icon-color"></i></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>admin1</td>
                        <td>admin1@gmail.com</td>
                        <td>0892173813</td>
                        <td>admin</td>
                        <td><a href="edit_user.php" class="icon-box"> <i class="fa fa-gear"></i></a>| <a href="" class="icon-box"> <i class="fa fa-trash icon-color"></i></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>admin1</td>
                        <td>admin1@gmail.com</td>
                        <td>0892173813</td>
                        <td>admin</td>
                        <td><a href="edit_user.php" class="icon-box"> <i class="fa fa-gear"></i></a>| <a href="" class="icon-box"> <i class="fa fa-trash icon-color"></i></a></td>
                    </tr><tr>
                        <td>3</td>
                        <td>admin1</td>
                        <td>admin1@gmail.com</td>
                        <td>0892173813</td>
                        <td>admin</td>
                        <td><a href="edit_user.php" class="icon-box"> <i class="fa fa-gear"></i></a>| <a href="" class="icon-box"> <i class="fa fa-trash icon-color"></i></a></td>
                    </tr><tr>
                        <td>3</td>
                        <td>admin1</td>
                        <td>admin1@gmail.com</td>
                        <td>0892173813</td>
                        <td>admin</td>
                        <td><a href="edit_user.php" class="icon-box"> <i class="fa fa-gear"></i></a>| <a href="" class="icon-box"> <i class="fa fa-trash icon-color"></i></a></td>
                    </tr><tr>
                        <td>3</td>
                        <td>admin1</td>
                        <td>admin1@gmail.com</td>
                        <td>0892173813</td>
                        <td>admin</td>
                        <td><a href="edit_user.php" class="icon-box"> <i class="fa fa-gear"></i></a>| <a href="" class="icon-box"> <i class="fa fa-trash icon-color"></i></a></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
 <!-- end kreasi development section -->
</div>

<script src="assets/js/jquery-3.7.1.min.js"></script>
<script src="assets/js/DataTables/datatables.min.js"></script>
    <script>
        $(document).ready(function(){
            
             $('#profil').DataTable()
        })
    </script>
<?php include 'footer.php'; ?>