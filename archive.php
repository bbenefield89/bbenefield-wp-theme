<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

// VARIABLES
$categories = get_the_category();

get_header(); ?>

<section class="blog wrap">
  
  <!-- HERO -->
  <?php get_template_part('/template-parts/content', 'hero'); ?>
  
  <!-- COMPANIES -->
  <?php get_template_part('/template-parts/content', 'companies'); ?>

  <!-- BLOG ROLL -->
  <div id="primary" class="row pt-5 content-area">
    <main id="main" class="col-12 site-main" role="main">
      <div class="row">
        
      <?php
      
        if (have_posts()) {
          while (have_posts()) {
            the_post();
            
            echo '
                  <article class="blog-post col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-4 mb-5 mb-md-0">
                    <header class="col-12 mb-3 text-center">
                      ',the_post_thumbnail([300, 186]),'
                    </header>
                    
                    <div class="col-12 mb-3 text-center">
                      <small>',the_category(' '),'</small>
                    </div>
                    <div class="col-12 mx-auto mb-3" style="max-width: 300px">
                      <h2 class="h2">
                        <a href="',the_permalink(),'">',the_title(),'</a>
                      </h2>
                    </div>
                    <div class="col-12 mx-auto mb-3" style="max-width: 300px">
                      <p class="lead">',the_excerpt(),'</p>
                    </div>
                  </article>
            ';
          }
        }
        
      ?>
      
      </div><!-- row -->
    </main><!-- #main -->
  </div><!-- #primary -->
</section><!-- .wrap -->

<?php get_footer();
