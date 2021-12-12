<?php
$message = "";
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        $message = "Login gagal! email dan password salah!";
    } else if ($_GET['pesan'] == "logout") {
        $message = "Anda telah berhasil logout";
    } else if ($_GET['pesan'] == "belum_login") {
        $message = "Anda harus login untuk mengakses halaman karyawan";
    }
}

session_start();
if (isset($_SESSION['karstat'])) {
    header("location:/karyawan/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/asset/styleloginsignup.css">
    <title>login</title>
</head>

<body>
    <div id="login-box">
        <div class="left-box">
            <h2>Selamat Datang di karyawan Hotel Reservation</h2>
            <h3>LOGIN As karyawan</h3>
            <?php echo "<p style='background-color: red; color: white;'>$message</p>"; ?>
            <form action="val-login.php" method="POST">
                <input type="text" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <center><input type="submit" name="login button" value="LOGIN" />
            </form>
            </center>
        </div>
    </div>
</body>

</html>