<?php 
session_start();

include 'db_connect.php';
 
$email = $_POST['email'];
$password = hash('sha256', $_POST['password']);
 
$data = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE email='$email' AND password='$password'");

$row = mysqli_fetch_assoc($data);

$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['id'] = $row['id'];
	$_SESSION['email'] = $email;
	$_SESSION['nama'] = $row['namalengkap'];
	$_SESSION['nohp'] = $row['nohp'];
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>