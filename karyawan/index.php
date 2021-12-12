<?php
session_start();
if ($_SESSION['karstat'] != "login") {
    header("location:/karyawan/login.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h2>Halaman karyawan</h2>
    <br />
    <h4>Selamat datang, <?php echo $_SESSION['email']; ?>! anda telah login.</h4>
    <br />
    <br />
    <a href="logout.php">LOGOUT</a>
</body>

</html>