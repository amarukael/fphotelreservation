<?php $page = "room"; ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Room</title>
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
                                <p><img src="asset/img/curve_white.svg" class="seperator probootstrap-animate"></p>
                                <h1 class="probootstrap-heading probootstrap-animate">Best Rooms</h1>
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
            <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="probootstrap-room">
                        <a href="booking.php"><img src="asset/img/img_4.jpg" class="img-responsive"></a>
                        <div class="text">
                            <h3>Classic Room</h3>
                            <p>Mulai dari <strong>Rp.200.000/Malam</strong></p>
                            <div class="post-meta mb30">
                                <ul>
                                    <li><span class="review-rate">4.0</span> <i class="icon-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="probootstrap-room">
                        <a href="booking.php"><img src="asset/img/img_1.jpg" class="img-responsive"></a>
                        <div class="text">
                            <h3>Ultra Superior Room</h3>
                            <p>Mulai dari<strong>Rp.400.000/Malam</strong></p>
                            <div class="post-meta mb30">
                                <ul>
                                    <li><span class="review-rate">4.5</span> <i class="icon-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="probootstrap-room">
                        <a href="booking.php"><img src="asset/img/img_2.jpg" class="img-responsive"></a>
                        <div class="text">
                            <h3>Grand Deluxe Room</h3>
                            <p>Mulai dari <strong>Rp.600.000</strong></p>
                            <div class="post-meta mb30">
                                <ul>
                                    <li><span class="review-rate">5.0</span> <i class="icon-star"></i></li>
                                </ul>
                            </div>
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