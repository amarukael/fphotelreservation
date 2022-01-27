<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:/admin/login.php?pesan=belum_login");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Dashboard</title>
</head>

<body>
    <div style="text-transform: uppercase; text-align: center;" class="position-absolute top-0 start-50 translate-middle-x">
        <br><br><br><br>
        <h2 class="fw-bold">Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
        <h4>apa yang ingin anda lakukan?</h4>

        <a class="btn btn-primary" style="float:right;" href="tambahkaryawan.php">Tambah Karyawan</a>

    </div>
    <div style="text-align: center;" class="position-absolute top-50 start-50 translate-middle">
        <a href="/admin/karyawan/index.php"><button type="button" class="btn btn-primary fw-bold">Edit data karyawan</button></a>
        <br><br>
        <a href="/admin/logout.php"><button type="button" class="btn btn-danger fw-bold">Logout</button></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>