<?php $page="about" ?>

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
                  <h1 class="probootstrap-heading probootstrap-animate">Tentang Amikom Hotel</h1>
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
      <div class="row mb30">
        <div class="col-md-12">
          <figure>
          <img src="asset/img/slider_1.jpg"  class="img-responsive">
          </figure>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit fugit, esse corrupti cum excepturi non illo provident, itaque quasi possimus perspiciatis necessitatibus. Voluptas quod deleniti libero nesciunt sed asperiores unde!</p>

          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Velit harum possimus unde, mollitia earum provident autem? Architecto neque, iste nulla fugit molestias excepturi quibusdam ex aliquam esse doloribus dolorem laborum.</p>
        </div>
        <div class="col-md-6">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto saepe illum eum! Ipsa quisquam, quis minus consequatur, incidunt omnis, expedita amet cum rerum ad animi nobis? Non quos aliquid possimus.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="probootstrap-section probootstrap-section-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="mt0">Why Choose Us?</h2>
          <p class="mb50"><img src="/asset/img/curve.svg" class="svg" ></p>
        </div>
        <div class="col-md-4">
          <div class="service left-icon left-icon-sm probootstrap-animate">
            <div class="icon">
              <i class="icon-check"></i>
            </div>
            <div class="text">
              <h3>Tersedia banyak kamar</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Placeat voluptas aliquid impedit accusamus, nesciunt assumenda perferendis cupiditate? Sunt, dolor. Commodi obcaecati ut assumenda libero neque delectus fugiat suscipit quas culpa!</p>
              <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>  
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon left-icon-sm probootstrap-animate">
            <div class="icon">
              <i class="icon-check"></i>
            </div>
            <div class="text">
              <h3>Makanan &amp; Minuman</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem numquam, doloribus obcaecati dignissimos laboriosam assumenda hic odit, temporibus perspiciatis officiis expedita itaque ipsa? Vero provident optio, delectus distinctio deserunt quos!</p>
              <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>  
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon left-icon-sm probootstrap-animate">
            <div class="icon">
              <i class="icon-check"></i>
            </div>
            <div class="text">
              <h3>Dekat dengan halte</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, dolores? Doloribus repellat atque hic quae, iusto nesciunt fugiat temporibus animi? Sed impedit dolorem eaque quis odit? Ex consequuntur repudiandae recusandae?</p>
              <p><a href="#" class="link-with-icon">Learn More <i class=" icon-chevron-right"></i></a></p>
            </div>  
          </div>
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