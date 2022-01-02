<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="asset/css/styles-merged.css">
  <link rel="stylesheet" href="asset/css/style.min.css">
  <link rel="stylesheet" href="asset/css/custom.css">
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
                  <p><img src="asset/img/curve_white.svg" class="seperator probootstrap-animate" ></p>
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
              <div class="form-field">
                <i class="icon icon-mail"></i>
                <input type="email" class="form-control" id="email" name="email">
              </div>
            </div>
            <div class="form-group">
              <label for="room">Kamar</label>
              <div class="form-field">
                <i class="icon icon-chevron-down"></i>
                <select name="room" id="room" class="form-control">
                  <option value="">Pilih Kamar</option>
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
              <div class="col-md-6">
                <div class="form-group">
                  <label for="children">Tamu Anak-anak</label>
                  <div class="form-field">
                    <i class="icon icon-chevron-down"></i>
                    <select name="children" id="children" class="form-control">
                      <option value="">Jumlah Anak-anak</option>
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


</body>

</html>