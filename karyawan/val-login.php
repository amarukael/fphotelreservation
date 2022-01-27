<?php 
session_start();

include '../db_connect.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = md5($_POST['password']);
 
$data = mysqli_query($koneksi,"SELECT * FROM data_karyawan WHERE email='$email' AND password='$password'");
 
$cek = mysqli_num_rows($data);
$row = mysqli_fetch_assoc($data);
 
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['nama'] = $row['nama'];
	$_SESSION['karstat'] = "login";
	header("location:/karyawan/index.php");
}else{
	header("location:/karyawan/login.php?pesan=gagal");
}
?>