<?php
// Get Header Top template. Located in flatsome/template-parts/header/header-top.php

  get_template_part('template-parts/header/header','top');
  // zig
  echo '<div id="home-intro" class="hide-for-sticky"><img src="'.get_stylesheet_directory_uri().'/images/woodlawn_wide_04.jpg"></div>';
  // Get Header Main template. Located in flatsome/template-parts/header/header-main.php
  get_template_part('template-parts/header/header', 'main');

  // Get Header Bottom template. Located in flatsome/template-parts/header/header-bottom-*.php
  get_template_part('template-parts/header/header', 'bottom');


  // Header Backgrounds
  echo '<div class="header-bg-container fill">';
  do_action('flatsome_header_background');
  echo '</div><!-- .header-bg-container -->';

  do_action('flatsome_header_wrapper');
?>
