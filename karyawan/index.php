<?php
session_start();
if ($_SESSION['karstat'] != "login") {
    header("location:/karyawan/login.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div style="margin: 100px auto; width: 900px;">
        <h2>Halaman karyawan</h2>
        <br />
        <h4>Selamat datang, <?php echo $_SESSION['email']; ?>! anda telah login.</h4>
        <br />
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Tugas</th>
                    <th>Kamar</th>
                    <th>Deadline</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i>NULL</i></td>
                    <td><i>NULL</i></td>
                    <td><i>NULL</i></td>
                    <td><i>NULL</i></td>
                </tr>
            </tbody>
        </table>
        <br />
        <a class="btn btn-warning" style="float:right;" href="logout.php"> Logout</a>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>


</html>