<section class="home-about row">
  
  <?php
  
    $loop = new WP_QUERY(
      [
        'post_type' => 'services',
        'order' => 'ASC',
        'orderby' => 'ID'
      ]
    );
    
    if ($loop->have_posts()) {
      while ($loop->have_posts()) {
        $loop->the_post();
        
        echo '
              <div class="col-12 col-lg-8 offset-lg-2 py-5">
                <div class="row">
                  <div class="col-12 col-md-6 mb-4">
                    ',the_post_thumbnail(),'
                  </div>
                  <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-0">
                    <h2 class="h3">',the_title(),'</h2>
                    <hr class="mr-md-auto ml-md-0">
                      ',the_content(),'
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- col -->
        ';
      }
      
      wp_reset_postdata();
    }
  
  ?>
  
</section>
