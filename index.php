<?php $page="home" ?>

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
  <?php include 'header.php' ?>
  <section class="probootstrap-slider flexslider">
    <ul class="slides">
      <li style="background-image: url(asset/img/slider_1.jpg);" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="probootstrap-slider-text text-center">
                <p><img src="asset/img/curve_white.svg" class="seperator probootstrap-animate" alt=""></p>
                <h1 class="probootstrap-heading probootstrap-animate">Selamat datang di Amikom Hotel</h1>
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

  <section class="probootstrap-cta probootstrap-light">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- <h2 class="probootstrap-cta-heading">Booking hotel? disini!</span></h2> -->
          <div class="probootstrap-cta-button-wrap"><a href="#" class="btn btn-primary">Reserve now</a></div>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row mb30">
        <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
          <h2>Jelajahi Layanan kami</h2>
          <p class="lead">Deskripsi</p>
          <p><img src="asset/img/curve.svg" class="svg" alt=""></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="asset/img/flaticon/svg/001-building.svg" class="svg" alt="">
            </div>
            <div class="text">
              <h3>Tersedia banyak kamar</h3>
              <p>Deskripsi</p>
              <p><a href="#" class="link-with-icon">Selengkapnya<i class=" icon-chevron-right"></i></a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="asset/img/flaticon/svg/003-restaurant.svg" class="svg" alt="">
            </div>
            <div class="text">
              <h3>Makanan &amp; Minuman</h3>
              <p>Deskripsi</p>
              <p><a href="#" class="link-with-icon">Selengkapnya <i class=" icon-chevron-right"></i></a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="asset/img/flaticon/svg/004-parking.svg" class="svg" alt="">
            </div>
            <div class="text">
              <h3>Dekat dengan halte</h3>
              <p>Deskripsi</p>
              <p><a href="#" class="link-with-icon">Selengkapnya <i class=" icon-chevron-right"></i></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="probootstrap-section probootstrap-section-dark">
    <div class="container">
      <div class="row mb30">
        <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
          <h2>Best Rooms</h2>
          <p class="lead">Deskripsi</p>
          <p><img src="asset/img/curve.svg" class="svg" alt=""></p>
        </div>
      </div>
      <div class="row probootstrap-gutter10">
        <div class="col-md-6">
          <div class="probootstrap-block-image-text">
            <figure>
              <a href="asset/img/img_1.jpg" class="image-popup">
                <img src="asset/img/img_1.jpg" alt="" class="img-responsive">
              </a>
              <div class="actions">
                <a href="#" class="popup-vimeo"><i class="icon-play2"></i></a>
              </div>
            </figure>
            <div class="text">
              <h3><a href="#">Grand Deluxe Room</a></h3>
              <div class="post-meta">
                <ul>
                  <li><span class="review-rate">5.0</span> <i class="icon-star"></i> </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="probootstrap-block-image-text">
            <figure>
              <a href="asset/img/img_2.jpg" class="image-popup">
                <img src="asset/img/img_2.jpg" alt="" class="img-responsive">
              </a>
              <div class="actions">
                <a href="#" class="popup-vimeo"><i class="icon-play2"></i></a>
              </div>
            </figure>
            <div class="text">
              <h3><a href="#">Ultra Superior Room</a></h3>
              <div class="post-meta">
                <ul>
                  <li><span class="review-rate">4.5</span> <i class="icon-star"></i> </li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="probootstrap-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 probootstrap-relative">
          <h3 class="mt0 mb30">Kamar lainnya</h3>
          <ul class="probootstrap-owl-navigation absolute right">
            <li><a href="#" class="probootstrap-owl-prev"><i class="icon-chevron-thin-left"></i></a></li>
            <li><a href="#" class="probootstrap-owl-next"><i class="icon-chevron-thin-right"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 probootstrap-relative">
          <div class="owl-carousel owl-carousel-carousel">
            <div class="item">
              <div class="probootstrap-room">
                <a href="#"><img src="asset/img/img_4.jpg" alt="" class="img-responsive"></a>
                <div class="text">
                  <h3>Classic Room</h3>
                  <p>Mulai dari <strong>Rp.200.000/Malam</strong></p>
                  <div class="post-meta">
                    <ul>
                      <li><span class="review-rate">4.2</span> <i class="icon-star"></i> </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="probootstrap-room">
                <a href="#"><img src="asset/img/img_5.jpg" alt="" class="img-responsive"></a>
                <div class="text">
                  <h3>Ultra Superior Room</h3>
                  <p>Mulai dari <strong>Rp.400.000/Malam</strong></p>
                  <div class="post-meta">
                    <ul>
                      <li><span class="review-rate">4.5</span> <i class="icon-star"></i> </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="probootstrap-room">
                <a href="#"><img src="asset/img/img_6.jpg" alt="" class="img-responsive"></a>
                <div class="text">
                  <h3>Grand Deluxe Room</h3>
                  <p>Mulai dari <strong>Rp.600.000/Malam</strong></p>
                  <div class="post-meta">
                    <ul>
                      <li><span class="review-rate">5.0</span> <i class="icon-star"></i> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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