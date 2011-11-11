<?php

// Four constants that must be defined in order for the custom image header to work properly
define('HEADER_TEXTCOLOR', 'ffffff');
define('HEADER_IMAGE', get_bloginfo('styesheet_directory') . '/images/default_header.jpg'); 
define('HEADER_IMAGE_WIDTH', 900); 
define('HEADER_IMAGE_HEIGHT', 150);

// Include the header within the theme
function header_style() {
    ?><style type="text/css">
        #header {
            background: url(<?php header_image(); ?>);
        }
    </style><?php
}

// Include the header within the admin interface
function admin_header_style() {
    ?><style type="text/css">
        #headimg {
            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
            background: no-repeat;
        }
    </style><?php
}

// Enabling the custom image header
add_custom_image_header('header_style', 'admin_header_style');