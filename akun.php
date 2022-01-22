<?php 

$page="akun" ;

session_start();
if (!isset($_SESSION['status'])) {
    header("location:login.php");
}
$nama = $_SESSION['nama'];
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
                <h1 class="probootstrap-heading probootstrap-animate">Selamat datang <?php echo $nama?></h1>
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

  <a href="logout.php"> amaszing</a>

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