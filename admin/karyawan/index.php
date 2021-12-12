<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:/admin/login.php?pesan=belum_login");
}

include '../../db_connect.php';
$result = mysqli_query($koneksi, "SELECT * FROM data_karyawan");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Edit Data Karyawan</title>
</head>

<body>
    <div class="position-absolute top-50 start-50 translate-middle">
        <a href="../karyawan/add.php"><button type="button" class="btn btn-primary fw-bold">Add</button></a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No HP</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                while ($data_karyawan = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . $data_karyawan['nama'] . "</td>";
                    echo "<td>" . $data_karyawan['nik'] . "</td>";
                    echo "<td>" . $data_karyawan['tanggal_lahir'] . "</td>";
                    echo "<td>" . $data_karyawan['alamat'] . "</td>";
                    echo "<td>" . $data_karyawan['nohp'] . "</td>";
                    echo "<td>" . $data_karyawan['email'] . "</td>";
                    $i++;

                    // echo "<td><a href='edit.php?id=$data_karyawan[id]'>Edit</a> | <a href='delete.php?id=$data_karyawan[id]'>Delete</a></td></tr>";
                    echo "<td>
                    <div class='btn-group' role='group' aria-label='Basic example'>
                    <a href='edit.php?id=$data_karyawan[id]'><button type='button' class='btn btn-primary'>Edit</button></a>
                    <a href='delete.php?id=$data_karyawan[id]'><button type='button' class='btn btn-primary'>Delete</button></div></a>
                    </td>";
                }
                ?>
            </tbody>
        </table>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>