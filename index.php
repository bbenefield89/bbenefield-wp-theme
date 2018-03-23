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

// VARIABLES
$header_bg_image = get_field('header_bg_image', 87);

get_header(); ?>
  <section class="container-fluid">
  	<article class="row">
  		
  		<div class="blog-header col-12 text-center" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo $header_bg_image['url']; ?>') no-repeat center center; background-size: cover;">
  			<h1>Blog</h1>
  			
  		</div>
  	</article>
  </section>

	<div id="primary" class="content-area container py-5">
    <div class="row">
      <div class="col-12 col-md-8">
        
      <?php
        if (have_posts()) :
          while (have_posts()) : the_post();
      ?>
        
        <section class="single-post col-12 mb-3">
          <header class="row mb-3">
            <div class="col-12">
              <?php the_title( '<h2 class="entry-title mt-3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
              <hr>
              <div class="row">
                <div class="single-post-details col-12">
                  <div class="post-detail-div">
                    <small><i class="fa fa-user"></i><?php the_author(); ?></small>
                  </div>
                  <div class="post-detail-div">
                    <small><i class="fa fa-calendar"></i><?php the_date(); ?></small>
                  </div>
                  <div class="post-detail-div">
                    <small><i class="fa fa-folder-open"></i><?php the_category(', '); ?></small>
                  </div>
                  <div class="post-detail-div">
                    <small><i class="fa fa-tags"></i><?php the_tags('', ', ', ''); ?></small>
                  </div>
                </div>
              </div>
            </div>
          </header>
          
          <article class="row">
            <?php
            if (has_post_thumbnail()) : ?>
            
            <div class="col-12 col-md-4">
              <?php the_post_thumbnail('medium', [ 'class' => 'mb-3' ]); ?>
            </div>
              
            <div class="col-12 col-md-8">
              <p>
                <?php the_excerpt(); ?>
              </p>
            </div>
            
            <?php else : ?>
              
            <div class="col-12">
                <?php the_excerpt(); ?>
            </div>
            
            <?php endif; ?>
            
          </article>
        </section>
        
        <?php
            endwhile;
          endif;
        ?>
        
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
