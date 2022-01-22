<?php $page="contact"; ?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kontak</title>
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="asset/css/styles-merged.css">
  <link rel="stylesheet" href="asset/css/style.min.css">
  <link rel="stylesheet" href="asset/css/custom.css">
</head>

<body>
  <?php include 'header.php';?>

  <section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
       <li style="background-image: url(asset/img/slider_1.jpg);" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="probootstrap-slider-text text-center">
                  <p><img src="asset/img/curve_white.svg" class="seperator probootstrap-animate"></p>
                  <h1 class="probootstrap-heading probootstrap-animate">Kontak</h1>
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
      <div class="row probootstrap-gutter60">
        <div class="col-md-8">
          <h2 class="mt0">Feedback</h2>
          <form action="#" method="post" class="probootstrap-form">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">Nama Depan</label>
                  <input type="text" class="form-control" id="fname" name="fname">
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
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="subject">Subjek</label>
              <input type="text" class="form-control" id="subject" name="subject">
            </div>
            <div class="form-group">
              <label for="message">Pesan Untuk Kami</label>
              <textarea cols="30" rows="10" class="form-control" id="message" name="message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Kirim">
            </div>
          </form>
        </div>
        <div class="col-md-4">
          <h2 class="mt0">Hubungi Kami di</h2>
          <ul class="probootstrap-contact-info">
            <li><i class="icon-location2"></i> <span>Alamat</span></li>
            <li><i class="icon-mail"></i><span>info@domain.com</span></li>
            <li><i class="icon-phone2"></i><span>No Telpon</span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <script src="asset/js/scripts.min.js"></script>
  <script src="asset/js/main.min.js"></script>
  <script src="asset/js/custom.js"></script>


</body>

</html>