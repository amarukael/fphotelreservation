<?php 
session_start();
include '../../db_connect.php';
if ($_SESSION['status'] != "login") {
    header("location:/admin/login.php?pesan=belum_login");
}
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    $bagian = $_POST['bagian'];
    $name = $_POST['name'];
    $nik = $_POST['nik'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $password = $_POST['password'];
        
    $result = mysqli_query($koneksi, "UPDATE data_karyawan SET id_bagian='$bagian', nama='$name',nik='$nik',
    tanggal_lahir='$tanggal_lahir',alamat='$alamat',nohp='$nohp', 
    email='$email',password='$password' WHERE id=$id");
    
    header("Location: index.php");
}
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM data_karyawan WHERE id=$id");
while($data_karyawan = mysqli_fetch_array($result))
{
    $bagian = $data_karyawan['id_bagian'];
    $name = $data_karyawan['nama'];
    $nik = $data_karyawan['nik'];
    $tanggal_lahir = $data_karyawan['tanggal_lahir'];
    $alamat = $data_karyawan['alamat'];
    $nohp = $data_karyawan['nohp'];
    $email = $data_karyawan['email'];
    $password = $data_karyawan['password'];
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
        <?php
        $ambilbagian = mysqli_query($koneksi, "SELECT * FROM bagian");
        ?>
        <form action="edit.php" method="post">
            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Posisi</label>
                <select class="form-select" id="inputGroupSelect01" name="bagian">
                    <option selected value=<?php echo $bagian;?>>Choose...</option>
                    <?php 
                    while($pilbagian =mysqli_fetch_array($ambilbagian)){
                        echo "<option value=".$pilbagian['id']."-".$pilbagian['bagian'].">".$pilbagian['id']." - ".$pilbagian['bagian']."</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" value=<?php echo $name;?>>
            </div>
            <div class="mb-3">
                <label class="form-label">NIK</label>
                <input type="text" class="form-control" name="nik" value=<?php echo $nik;?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Lahir</label>
                <input type="date" format="yyyy/mm/dd" class="form-control" name="tanggal_lahir" value=<?php echo $tanggal_lahir;?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" value=<?php echo $alamat;?>>
            </div>
            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="text" class="form-control" name="nohp" value=<?php echo $nohp;?>>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value=<?php echo $email;?>>
            </div>
            <input type="hidden" name="password" value=<?php echo $password;?>>
            <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
            <button type="submit" name="update" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>