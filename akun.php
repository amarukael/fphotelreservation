<?php

include 'db_connect.php';

$page = "akun";

session_start();
if (!isset($_SESSION['status'])) {
  header("location:login.php");
}
$nama = $_SESSION['nama'];
$email = $_SESSION['email'];
$nohp = $_SESSION['nohp'];
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Akun</title>
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="asset/css/styles-merged.css">
  <link rel="stylesheet" href="asset/css/style.min.css">
  <link rel="stylesheet" href="asset/css/custom.css">
  <style>
    .mid {
      margin: 0 auto;
      width: 400px;
      padding: 20px;
      color: white;
    }
  </style>
</head>

<body>
  <?php include 'header.php' ?>
  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url(asset/img/slider_1.jpg);" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="probootstrap-slider-text text-center">
                <p><img src="asset/img/curve_white.svg" class="seperator probootstrap-animate" alt=""></p>
                <h1 class="probootstrap-heading probootstrap-animate">Selamat datang <?php echo $nama ?></h1>
                <div class="probootstrap-animate probootstrap-sub-wrap">Deskripsi</div>
              </div>
            </div>
          </div>
        </div>
      </li>
      <li style="background-image: url(asset/img/slider_2.jpg);" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="probootstrap-slider-text text-center">
                <p><img src="asset/img/curve_white.svg" class="seperator probootstrap-animate" alt=""></p>
                <h1 class="probootstrap-heading probootstrap-animate">Nikmati Pengalaman Mewah</h1>
                <div class="probootstrap-animate probootstrap-sub-wrap">Deskripsis</div>
              </div>
            </div>
          </div>
        </div>

      </li>
    </ul>
  </section>
  <div class="mid">
    <h3 style="text-align: center;"><b>Selamat Datang!</b></h3>
    <img style="display: block; margin-left: auto; margin-right: auto;  width: 100px; border-radius: 50%" src="asset/img/profile.png" alt=""><br>
    <table style="color: black; margin:auto;width:auto;">
      <tr>
        <td style="padding-right:30px;">Nama</td>
        <td> : <?php echo $nama ?></td>
      </tr>
      <tr>
        <td>Email</td>
        <td> : <?php echo $email ?></td>
      </tr>
      <tr>
        <td>No HP</td>
        <td> : <?php echo $nohp ?></td>
      </tr>
    </table>
    <br><br>

    <table class="table table-sm" style="color: black;">
      <tr>
        <th>No</th>
        <th>Jenis Kamar</th>
        <th>Cek In</th>
        <th>Cek Out</th>
      </tr>
      <?php
      $kamar = "";
      $result = mysqli_query($koneksi, "SELECT * FROM booking_kamar WHERE email='$email' ORDER BY id");
      $index = 0;
      while ($data = mysqli_fetch_array($result)) {
        if($data['id_kamar'] == 1){
          $kamar = "Classic Room";
        } else if($data['id_kamar'] == 2){
          $kamar = "Ultra Superior Room";
        }else{
          $kamar = "Grand Deluxe Room";
        }
        $index++;
        echo "<tr>";
        echo "<td>" . $index . "</td>";
        echo "<td>" . $kamar . "</td>";
        echo "<td>" . $data['cekin'] . "</td>";
        echo "<td>" . $data['cekout'] . "</td>";
        echo "</tr>";
      }
      ?>
    </table>
    <a class="btn btn-warning" style="float:right;" href="logout.php"> Logout</a>
  </div>
  <br>
  <section class="probootstrap-half">
    <div class="image" style="background-image: url(asset/img/slider_2.jpg);"></div>
    <div class="text">
      <div class="probootstrap-animate fadeInUp probootstrap-animated">
      </div>
    </div>
  </section>
  <?php include 'footer.php'; ?>

  <script src="asset/js/scripts.min.js"></script>
  <script src="asset/js/main.min.js"></script>
  <script src="asset/js/custom.js"></script>


</body>

</html>