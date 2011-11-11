<?php

// Insert the header.php file to begin the page output
get_header();

// Add in page logic via the Loop
if (have_posts()) :
   while (have_posts()) :
      the_post();
      the_content();
   endwhile;
endif;

// Insert both widgetized sidebars
get_sidebar('left');
get_sidebar('right');

// Insert the footer.php file to complete the page output
get_footer(); 

?>