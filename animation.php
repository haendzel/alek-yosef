<<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); ?>
</head>
  <body>

      <div class="flex-wrap container-fluid">

      <div class="row">

      <div class="col-lg-9 col-md-12 col-xs-12 artworks">


      <!---  PAGE CONTENT ---> 
      <div class="container">
      <div class="title">Category: Animation<br><br></div>
      <div class="row">
        <figure class="art col-lg-3 col-md-4 col-xs-6" title="Birds">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/5.jpg" alt="">
          </a>
        </figure>
        <figure class="art col-lg-3 col-md-4 col-xs-6" title="Birds">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/6.jpg" alt="">
          </a>
        </figure>
        <figure class="art col-lg-3 col-md-4 col-xs-6" title="Birds">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/5.jpg" alt="">
          </a>
        </figure>
        <figure class="art col-lg-3 col-md-4 col-xs-6" title="Birds">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/2.jpg" alt="">
          </a>
        </figure>
        <figure class="art col-lg-3 col-md-4 col-xs-6" title="Birds">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="img/3.jpg" alt="">
          </a>
        </figure>
      </div>
    </div>
  </div>


      <!--- MENU --->

        <nav class="navbar col-lg-3 col-md-0 menu">

        <div class="upper-menu">
        <h3 class="artist-name">Alek Józefczyk</h3>
        <h3 class="portfolio">Portfolio</h3>
        <ul class="navigation">
                <li><a class="navlink" href="index.php">All works</a></li>
                <li><a class="navlink" href="animation.php">Animation</a></li>
                <li><a class="navlink" href="illustration.html">Illustration</a></li>
                <li><a class="navlink" href="painting-other.html">Painting/Other</a></li>
                <li><a class="navlink" href="poster.html">Poster</a></li>
                <li><a class="navlink" href="about-me.html">About me</a></li>
        </ul>
        </div>
        <div class="down-menu">
          <div class="contact-menu">email: alek.jozefczyk@gmail.com</div>
        <div class="social-media"><i class="fab fa-behance-square"></i><i class="fab fa-vimeo-square"></i><i class="fab fa-facebook-square"></i><i class="fab fa-instagram"></i></div>
          <div class="copyright">&copy; Design by Alek Jozefczyk / Code by Filip Handzel</div>

        </nav>
    <!--- END MENU STANDARD --->
    <!--- MENU MOBILE --->
        <nav class="nav-mobile">
        <label for="menu-toggle"><i class="fas fa-bars"></i><span class="artist-name-mobile">Alek Józefczyk</span></label>
        <input type="checkbox" id="menu-toggle"/>
        <ul id="menu">
          <li><a class="navlink" href="index.html">All works</a></li>
          <li><a class="navlink" href="animation.html">Animation</a></li>
          <li><a class="navlink" href="illustration.html">Illustration</a></li>
          <li><a class="navlink" href="painting-other.html">Painting/Other</a></li>
          <li><a class="navlink" href="poster.html">Poster</a></li>
          <li><a class="navlink" href="about-me.html">About me</a></li>
        <div class="contact-menu-mobile">email: alek.jozefczyk@gmail.com</div>
        <div class="social-media-mobile"><i class="fab fa-behance-square"></i><i class="fab fa-vimeo-square"></i><i class="fab fa-facebook-square"></i><i class="fab fa-instagram"></i></div>
        <div class="copyright-mobile">&copy; Design by Alek Jozefczyk / Code by Filip Handzel</div>
        </ul>
        </nav>
    <!-- END MENU MOBILE --->

    </div> <!-- container fluid -->
<script src="js/activelinks.js"></script>
  </body>
</html>