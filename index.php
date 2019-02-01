<?php get_header(); ?>

<?php get_template_part( 'navigation', 'default' ); ?>

<div class="container main-container">

      <!--- MENU MOBILE --->
        <nav class="col-xs-12 nav-mobile">
        <label for="menu-toggle"><i class="fas fa-bars"></i><span class="artist-name-mobile">Alek Józefczyk</span></label>
        <input type="checkbox" id="menu-toggle"/>
        <ul id="menu">
          <li><a href="index.html">All works</a></li>
          <li><a href="animation.html">Animation</a></li>
          <li><a href="illustration.html">Illustration</a></li>
          <li><a href="painting-other.html">Painting/Other</a></li>
          <li><a href="poster.html">Poster</a></li>
          <li><a href="about-me.html">About me</a></li>
        <div class="contact-menu-mobile">email: alek.jozefczyk@gmail.com</div>
        <div class="social-media-mobile"><i class="fab fa-behance-square"></i><i class="fab fa-vimeo-square"></i><i class="fab fa-facebook-square"></i><i class="fab fa-instagram"></i></div>
        <div class="copyright-mobile">&copy; Design by Alek Jozefczyk / Code by Filip Handzel</div>
        </ul>
        </nav>
    <!-- END MENU MOBILE --->
    
  <div class="row">
    <div class="artworks col-lg-9">

      <figure class="art col-lg-3 col-md-4 col-xs-6" title="Birds" id="open-to-view">
          <a class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?php echo get_template_directory_uri() . '/img/1.jpg'; ?>" />
          </a>
        </figure>
<?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
      get_template_part( 'content', get_post_format() );
    endwhile;
      bootstrap_four_the_posts_pagination();
  else :
    ?><p><?php _e( 'Sorry, Alek lost and live in Stanislavov Dolny', 'bootstrap-four' ); ?></p><?php
  endif;
?>
    </div><!-- .col -->
    <div class='navbar menu col-lg-3'>

        <div class="upper-menu">
        <h3 class="artist-name">Alek Józefczyk</h3>
        <h3 class="portfolio">Portfolio</h3>
        <ul class="navigation">
                <li><a  href="index.html">All works</a></li>
                <li><a href="animation.html">Animation</a></li>
                <li><a href="illustration.html">Illustration</a></li>
                <li><a href="painting-other.html">Painting/Other</a></li>
                <li><a href="poster.html">Poster</a></li>
                <li><a href="about-me.html">About me</a></li>
        </ul>
        </div>
        <div class="down-menu">
          <div class="contact-menu">email: alek.jozefczyk@gmail.com</div>
        <div class="social-media"><i class="fab fa-behance-square"></i><i class="fab fa-vimeo-square"></i><i class="fab fa-facebook-square"></i><i class="fab fa-instagram"></i></div>
          <div class="copyright">&copy; Design by Alek Jozefczyk / Code by Filip Handzel</div>
        </nav>
    </div><!-- .col -->
  </div><!-- .row -->
</div><!-- .container.main-container -->

<?php get_footer(); ?>
