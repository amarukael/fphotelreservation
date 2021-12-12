<?php 
session_start();
session_destroy();

header("Location: /karyawan/index.php");

?>