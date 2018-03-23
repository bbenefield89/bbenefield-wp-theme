<?php

/*
  Template Name: Coming Soon
*/

  get_header();

?>

<style>

</style>

<main class="container-fluid text-center">

  <?php
  while ( have_posts() ) : the_post();
    
    the_title('<h1>', '</h1>');

    the_content();

  endwhile;
  ?>

</main>

<?php

  get_footer();
