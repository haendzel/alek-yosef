<!DOCTYPE html>
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
  	<?php body_class(); ?>>

      <div class="flex-wrap container-fluid">

      <div class="row">

      <div class="col-lg-9 col-md-12 col-xs-12 artworks">
      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="entry">
    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

    <?php the_content('Czytaj dalej...'); ?>
    <br class="clear" />
  </div> <!-- end entry -->

  <div class="entry-author">Dodał <span><?php the_author(); ?></span></div>
  <div class="entry-date">&nbsp;w dniu <span><?php the_time('d-m-Y'); ?></span></div>
  <div class="postmetadata">Opublikowano w kategorii <?php the_category(', '); ?></div>

<?php endwhile; else: ?>
  <p><?php _e('Narazie Alek nie dodał jeszcze żadnych prac.'); ?></p>
<?php endif; ?>


      <!---  PAGE CONTENT ---> 
      <div class="container">
      <div class="row">
      </div>
    </div>
  </div>
    </div> <!-- container fluid -->
  <!--- MENU --->
  	<?php wp_nav_menu( array(
    'menu' => 'navigation',
    'container' => 'navbar',
    'menu_class' => 'navlink',
	) ); ?>
        <nav class="navbar col-lg-3 col-md-0 menu">

        <div class="upper-menu">
        <?php bloginfo('name'); ?>
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
        <?php wp_footer(); ?>
        </ul>
        </nav>
    <!-- END MENU MOBILE --->

  <script src="js/activelinks.js"></script>
  <script src="js/modal.js"></script>
  </body>
</html>