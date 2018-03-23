<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bbenefield
 */

get_header(); ?>

<!-- HERO -->
<?php get_template_part('/template-parts/content', 'hero') ?>

<!-- COMPANIES -->
<?php get_template_part('/template-parts/content', 'companies') ?>

  <div id="primary" class="content-area container py-5">
    <div class="row">
      	
      	<div class="col-12 col-md-8 text-center">
      		<h2>
      			You should've taken a left turn at Albuquerque...
      		</h2>
      		<p class="lead text-left">
      			As a last ditch effort to make it back to civilization, you can always return to the <a href="/blog">Blog</a> page or <a href="/">Home</a>.
      		</p>
      	</div>
      
      <div class="col-12 col-md-4">
        <div class="blog-sidebar col-12 px-5">
          <?php dynamic_sidebar('blog-sidebar'); ?>
        </div>
    </div>
          
    </div>
  </div><!-- #primary -->

<?php
get_footer();
