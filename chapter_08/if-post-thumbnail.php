<?php

if(has_post_thumbnail()) {   // Does the post have a thumbnail?
	the_post_thumbnail();   // If a thumbnail exists, display it
} else {
	// Do something else here in place of a post thumbnail
}

?>