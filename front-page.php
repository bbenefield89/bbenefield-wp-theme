<?php
/*
  Template Name: Front Page
*/
    
  get_header();
?>

<!-- HERO SECTION -->
<?php get_template_part('/template-parts/content', 'hero'); ?>

<!-- COMPANIES IVE WORKED FOR -->
<?php get_template_part('/template-parts/content', 'companies'); ?>

<!-- WHAT I DO -->
<?php get_template_part('/template-parts/home/content', 'what_i_do'); ?>

<!-- CONTACT -->
<?php get_template_part('/template-parts/home/content', 'contact'); ?>

<?php get_footer(); ?>
