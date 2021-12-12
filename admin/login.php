<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "gagal") {
        echo "Login gagal! username dan password salah!";
    } else if ($_GET['pesan'] == "logout") {
        echo "Anda telah berhasil logout";
    } else if ($_GET['pesan'] == "belum_login") {
        echo "Anda harus login untuk mengakses halaman admin";
    }
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
			<h2>Selamat Datang di Admin Hotel Reservation</h2>
			<h3>LOGIN As ADMIN</h3>
			<form action="val-login.php" method="POST">
				<input type="text" name="username" placeholder="Username" />
				<input type="password" name="password" placeholder="Password" />
				<center><input type="submit" name="login button" value="LOGIN" />
			</form></center>
		</div>
		<div>
</body>

</html>