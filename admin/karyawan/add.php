<?php
session_start();
include '../../db_connect.php';
if ($_SESSION['status'] != "login") {
    header("location:/admin/login.php?pesan=belum_login");
}
$alert = "";
if (isset($_POST['submit'])) {
    $bagian = $_POST['bagian'];
    $name = $_POST['name'];
    $nik = $_POST['nik'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $password = md5($pass);


    $result = mysqli_query($koneksi, "INSERT INTO data_karyawan(id_bagian,nama,nik,tanggal_lahir,alamat,nohp,email,password) VALUES('$bagian','$name','$nik','$tanggal_lahir','$alamat','$nohp','$email','$password')");

    $alert = "<div class='alert alert-primary'>Data berhasil dimasukan, <a href='index.php'>klik</a> untuk melihat</div>";
}




?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Add Karyawan</title>
</head>

<body>
    <div style="margin: 30px 100px ;">
        <?php echo $alert; ?>
        <?php
        $ambilbagian = mysqli_query($koneksi, "SELECT * FROM bagian");
        ?>
        <form action="add.php" method="post">
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Posisi</label>
                <select class="form-select" id="inputGroupSelect01" name="bagian">
                    <option selected>Choose...</option>
                    <?php 
                    while($pilbagian =mysqli_fetch_array($ambilbagian)){
                        echo "<option value=".$pilbagian['id']."-".$pilbagian['bagian'].">".$pilbagian['id']." - ".$pilbagian['bagian']."</option>";
                    }
                    
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik">
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" format="yyyy/mm/dd" class="form-control" name="tanggal_lahir">
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat">
            </div>
            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="text" class="form-control" name="nohp">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>