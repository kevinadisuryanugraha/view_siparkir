<?php
// fungsi logout
session_start();
session_unset();
session_destroy();

echo "<script>
alert('Berhasil Logout');
window.location='login.php';
</script>";
exit();