<?php

  $portfolio_header = get_field('portfolio_header');
  
?>

<a name="portfolio"></a>
<section id="home-portfolio-section" class="container-fluid">
  <header class="row mb-5 pt-5">
    <h2 class="h1">
      <?php echo $portfolio_header; ?>
    </h2>
  </header> <!-- row -->
  
  <article class="row text-center">
    <div class="col-12">
      <div class="row">
        
        <?php
          $loop = new WP_QUERY(
            [
              'post_type' => 'portfolio_sites',
              'order' => 'ASC',
              'orderby' => 'ID'
            ]
          );
          
          if ($loop->have_posts()) :
            while ($loop->have_posts()) : $loop->the_post();
              $website_image = get_field('website_image');
        ?>
              <div class="col-12 mb-5 col-md-6">
                <img src="<?php echo $website_image['url'] ?>" alt="<?php echo $website_image['alt'] ?>" data-toggle="modal" data-target="#<?php echo $website_image['title']; ?>">
              </div>    
        <?php
            endwhile;
            wp_reset_postdata();
          endif;
        ?>
        
      </div> <!-- row -->
    </div> <!-- col-12 -->
  </article> <!-- row -->
</section> <!-- container-fluid -->
