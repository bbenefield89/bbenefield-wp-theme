<?php

  $modal_background_image = get_field('modal_background_image');

  $loop = new WP_QUERY([
    'post_type' => 'portfolio_sites',
    'order' => 'ASC',
    'orderby' => 'ID'
  ]);
  
  if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post();
      $modal_info = get_field('website_image');
      $modal_info_lg = get_field('website_image_lg');
?>

      <div id="<?php echo $modal_info['title']; ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="background: url('<?php echo $modal_background_image; ?>');">
            
            <div class="row mb-3">
              <div class="col-12 text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <img src="<?php echo $modal_info['url']; ?>" srcset="<?php echo $modal_info_lg['url'] ?> 992w">
              </div> <!-- col-12 -->
            </div> <!-- row -->
            
            <div class="row">
              <div class="col-12">
                <p class="lead text-center">
                  <strong><?php echo $modal_info['caption']; ?></strong>
                </p>
              </div> <!-- col-12 -->
            </div> <!-- row -->
                        
            <div class="row mb-4">
              <div class="col-10 offset-1">
                <?php echo $modal_info['description']; ?>
              </div> <!-- col -->
            </div> <!-- row -->
            
            <div class="row mb-5">
              <div class="col-12 text-center">
                <a href="//<?php echo $modal_info['caption']; ?>" target="_blank">
                  <button type="button" class="view-site btn btn-lg">View Site</button>
                </a>
              </div> <!-- col -->
            </div> <!-- row -->
            
            <div class="row mb-3">
              <div class="col-10 offset-1">
                <?php the_field('website_description'); ?>
              </div> <!-- col -->
            </div> <!-- row -->
            
          </div> <!-- modal-content -->
        </div> <!-- modal-dialog -->
      </div> <!-- modal -->
      
<?php
    endwhile;
    wp_reset_postdata();
  endif;
?>
