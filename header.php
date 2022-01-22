<header role="banner" class="probootstrap-header">
    <div class="row">
        <a href="index.php" class="probootstrap-logo visible-xs"><img src="asset/img/logo.png" class="hires" width="120" height="33" alt="Free Bootstrap Template by uicookies.com"></a>
        <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>
        <nav role="navigation" class="probootstrap-nav hidden-xs">
            <ul class="probootstrap-main-nav">
                <li <?php if($page=="home"){echo 'class="active"';} ?>><a href="index.php">Home</a></li>
                <li <?php if($page=="about"){echo 'class="active"';} ?>><a href="about.php">Tentang</a></li>
                <li <?php if($page=="room"){echo 'class="active"';} ?>><a href="room.php">Kamar Kami</a></li>
                <li class="hidden-xs probootstrap-logo-center"><a href="index.php"><img src="asset/img/logo.png" class="hires" width="200" height="50" alt="Free Bootstrap Template by uicookies.com"></a></li>
                <li <?php if($page=="booking"){echo 'class="active"';} ?>><a href="booking.php">Reservasi</a></li>
                <li <?php if($page=="contact"){echo 'class="active"';} ?>><a href="contact.php">Kontak</a></li>
                <li <?php if($page=="akun"){echo 'class="active"';} ?>><a href="login.php">Akun</a></li>
            </ul>
        </nav>
    </div>
</header>