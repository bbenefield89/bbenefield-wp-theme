<?php

  $about_background_image = get_field('about_background_image');
  $about_header = get_field('about_header');
  $author_pic = get_field('author_pic');

?>

<a name="about"></a>

<!-- Check if user uploads a background image -->
<?php if (empty($about_background_image)) : ?>
  
  <section id="home-about-section" class="container-fluid mb-5 pt-5 pb-5">
    
<?php else : ?>
  
  <section id="home-about-section" class="container-fluid mb-5 pt-5 pb-5" style="background: url('<?php echo $about_background_image['url']; ?>');">
    
<?php endif; ?> <!-- endif -->
  
    <header class="row pt-5 pb-5">
      <h2 class="h1">
        <?php echo $about_header; ?>
      </h2>
    </header> <!-- header -->
    
    <article class="row text-center">
      <div class="col-12">
        <div id="about-points" class="row mx-auto">
          
          <?php
            $loop = new WP_QUERY(
              [
                'post_type' => 'about_point',
                'order' => 'ASC',
                'orderby' => 'ID'
              ]
            );
            
            if ($loop->have_posts()) :
              while ($loop->have_posts()) : $loop->the_post();
          ?>
                <div class="about-points col-12 mb-5 col-md-6">
                  <div class="mx-auto" style="border: 2px solid <?php the_field('border_font_color') ?>">
                    <i class="<?php the_field('about_points_icons'); ?> mb-3" style="color: <?php the_field('border_font_color') ?>"></i>
                    <h3>
                      <?php the_content(); ?>
                    </h3>
                  </div> <!-- mx-auto -->
                </div> <!-- class about-points -->
          <?php
              endwhile;
              wp_reset_postdata();
            endif;
          ?>
        </div> <!-- id about-points -->
      
        <?php if (!empty($author_pic)) : ?>
          
          <div id="author-pic" class="col-10 offset-1">
            <?php echo $author_pic['url']; ?>
          </div> <!-- author-pic -->
          
        <?php endif; ?>
        
  </article> <!-- row -->
</section> <!-- home-about-section -->
