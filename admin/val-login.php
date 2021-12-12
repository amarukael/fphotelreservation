<?php 
session_start();

include '../db_connect.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$data = mysqli_query($koneksi,"SELECT * FROM admin WHERE name='$username' AND password='$password'");
 
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:/admin/index.php");
}else{
	header("location:/admin/index.php?pesan=gagal");
}
?>