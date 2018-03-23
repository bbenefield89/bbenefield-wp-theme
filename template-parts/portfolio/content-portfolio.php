<section class="portfolio row py-5">
  
  <?php
  
    $loop = new WP_QUERY(
      [
        'post_type' => 'portfolio_sites',
        'order' => 'ASC',
        'orderby' => 'ID'
      ]
    );
    
    if ($loop->have_posts()) {
      while ($loop->have_posts()) {
        $loop->the_post();
        
        echo '
              <div class="col-12">
                <div class="row mb-5">
                  <div class="col-12 col-md-6 mb-3 mb-md-5">
                    ',the_post_thumbnail(),'
                  </div>
                  <div class="col-12 col-md-6 mb-3">
                    <h2 class="h2">',the_title(),'</h2>
                    ',the_content(),'
                  </div>
                </div>
              </div>
        ';
      }
    }
  
  ?>
  
</section>
