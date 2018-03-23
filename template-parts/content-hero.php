<?php

  $hero_bg_image = get_field('hero_bg_image');
  $hero_headline = get_field('hero_headline');
  $hero_button_text = get_field('hero_button_text');

?>

<a name="top"></a>

<?php

  if (!empty($hero_bg_image)) {
    echo '
          <section id="home-hero-section" class="pt-5">
    ';
  } else {
    echo '
          <section id="home-hero-section" class="pt-5">
    ';
  }
  
?>

  <header class="hero-header">
    <div class="text-center pb-5">
      <?php
      
        if (is_single()) {
          echo '<h1 class="h1">',get_the_title(),'</h1>';
          
        } elseif (is_home()) {
          echo '<h1 class="h1">Articles by Brandon Benefield</h1>';
          
        } elseif (is_archive()) {
          echo '<h1 class="h1">Archives for ';
                  
                  foreach (get_the_category() as $category) {
                    echo $category->cat_name;
                  }
                  
               '</h1>';
          
        } elseif (!is_home()) {
          echo $hero_headline;
        }
        
      ?>
      
      <a href="/#contact" class="hero-button btn btn-lg">
        Make Contact
      </a>
    </div>
  </header>
</section>
