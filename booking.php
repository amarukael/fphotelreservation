<?php
include 'db_connect.php';
$page = "booking";

$nama = "";
$nohp = "";
$email = "";

session_start();
if (isset($_SESSION['status'])) {
  $nama = $_SESSION['nama'];
  $nohp = $_SESSION['nohp'];
  $email = $_SESSION['email'];
  $id_pengguna = $_SESSION['id'];
}

if (isset($_POST['submit'])) {
  $namares = $_POST['fname'].$_POST['lname'];
  $emailres = $_POST['email'];
  $kamarres = $_POST['room'];
  $cekin = $_POST['date-arrival'];
  $cekout = $_POST['date-departure'];
  $tamu = $_POST['adults'];

  $sql = "SELECT * FROM booking_kamar WHERE email='$email' AND id_kamar='$kamarres' AND cekin='$cekin'";
  $result = mysqli_query($koneksi, $sql);
  if (!$result->num_rows > 0) {
    $sql = "INSERT INTO booking_kamar (id, id_pengguna, nama, email, id_kamar, cekin, cekout, total_tamu)
            VALUES ('','$id_pengguna', '$namares', '$emailres', '$kamarres', '$cekin', '$cekout', '$tamu')";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        echo "<script>alert('Selamat, Booking berhasil!')</script>";
    } else {
        echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
    }
} else {
    echo "<script>alert('Woops! Pesanan Sudah Terdaftar.')</script>";
}

}

?>

<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Booking</title>
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="asset/css/styles-merged.css">
  <link rel="stylesheet" href="asset/css/style.min.css">
  <link rel="stylesheet" href="asset/css/custom.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>

<body>
  <?php include 'header.php'; ?>

  <section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
      <li style="background-image: url(asset/img/slider_1.jpg);" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="probootstrap-slider-text text-center">
                <p><img src="asset/img/curve_white.svg" class="seperator probootstrap-animate"></p>
                <h1 class="probootstrap-heading probootstrap-animate">Booking Kamar</h1>
                <div class="probootstrap-animate probootstrap-sub-wrap">Deskripsi</div>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row probootstrap-gutter40">
        <div class="col-md-8">
          <h2 class="mt0">Booking Formulir</h2>
          <form action="#" method="post" class="probootstrap-form">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">Nama Depan</label>
                  <input type="text" class="form-control" id="fname" name="fname" value=<?php echo $nama ?>>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Nama Belakang</label>
                  <input type="text" class="form-control" id="lname" name="lname">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <div class="form-field">
                <i class="icon icon-mail"></i>
                <input type="email" class="form-control" id="email" name="email" value=<?php echo $email ?>>
              </div>
            </div>
            <div class="form-group">
              <label for="room">Kamar</label>
              <div class="form-field">
                <i class="icon icon-chevron-down"></i>
                <select name="room" id="room" class="form-control">
                  <option value="" selected disabled>Pilih Kamar</option>
                  <option value="1">Classic Room</option>
                  <option value="2">Ultra Superior Room</option>
                  <option value="3">Grand Deluxe Room</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="date-arrival">Check In</label>
                  <div class="form-field">
                    <i class="icon icon-calendar2"></i>
                    <input type="text" class="form-control" id="date-arrival" name="date-arrival">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="date-departure">Check Out</label>
                  <div class="form-field">
                    <i class="icon icon-calendar2"></i>
                    <input type="text" class="form-control" id="date-departure" name="date-departure">
                  </div>
                </div>
              </div>
            </div>

            <div class="row mb30">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="adults">Tamu Dewasa</label>
                  <div class="form-field">
                    <i class="icon icon-chevron-down"></i>
                    <select name="adults" id="adults" class="form-control">
                      <option value="">Jumlah Orang Dewasa</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4+</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Booking">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  <?php include 'footer.php'; ?>

  <script src="asset/js/scripts.min.js"></script>
  <script src="asset/js/main.min.js"></script>
  <script src="asset/js/custom.js"></script>
  <?php if(!isset($_SESSION['status'])) {
        echo "
        <script type='text/javascript'>
        alert('anda belum login, silahkan login')
        window.location = 'login.php';
        </script>
        ";
  }
  ?>


</body>

</html>