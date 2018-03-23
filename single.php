<?php get_header(); ?>

<!-- HERO -->
<?php get_template_part('/template-parts/content', 'hero'); ?>

<!-- COMPANIES -->
<?php get_template_part('/template-parts/content', 'companies'); ?>

<main class="single-post row pt-5">
  <section class="col-12">
    
    <div class="row mx-auto mb-4">
      <div class="col-12 col-sm-10 offset-sm-1">
        <p class="lead"><?php echo the_content(); ?></p>
      </div>
    </div>
    
    <?php
    
    if (comments_open() || get_comments_number()) {
      comments_template();
    }
    
    ?>
    
  </section>
</main>

<?php get_footer(); ?>
