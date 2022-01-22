<?php 
error_reporting(0);

include 'db_connect.php';
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
	$namalengkap = $_POST['namalengkap'];
	$nohp = $_POST['nohp'];
    $password = hash('sha256',$_POST['password']);
    $cpassword = hash('sha256',$_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM pengguna WHERE email='$email'";
        $result = mysqli_query($koneksi, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO pengguna (id, email, namalengkap, nohp, password)
                    VALUES ('','$email', '$namalengkap', '$nohp', '$password')";
            $result = mysqli_query($koneksi, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $email = "";
				$namalengkap = "";
				$nohp = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>

<!doctype html>
<html lang="en">

<head>
	<title>Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="asset/css/logstyle.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(asset/img/slider_1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign Up</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<form action="" method="POST" class="signin-form">
								<div class="form-group mt-3">
									<input id="email" name="email" type="email" class="form-control" required placeholder="Email">
								</div>
								<div class="form-group">
									<input id="namalengkap" name="namalengkap" type="text" class="form-control" required placeholder="Nama Lengkap">
								</div>
								<div class="form-group">
									<input id="nohp" name="nohp" type="text" class="form-control" required placeholder="Nomor Handphone">
								</div>
								<div class="form-group">
									<input id="password" name="password" type="password" class="form-control" required placeholder="Password">
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<input id="cpassword" name="cpassword" type="password" class="form-control" required placeholder="Konfirmasi Password">
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<button name="submit" id="submit" type="submit" class="form-control btn btn-primary rounded submit px-3">
									Sign Up
									</button>
								</div>
							</form>
							<p class="text-center">Sudah memiliki akun? <a data-toggle="tab" href="login.php">Sign In</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="asset/js/vendor/jquery.min.js"></script>
	<script src="asset/js/vendor/popper.js"></script>
	<script src="asset/js/vendor/bootstrap.min.js"></script>
	<script src="asset/js/main.js"></script>

</body>

</html>