<?php
function play_nice($content) {
	$mean_words = array("putz","dumdum head","dimwit");
	$content=str_ireplace($mean_words,'[mean name]',$content);
	return $content;
}

add_filter ('the_content', 'play_nice');
?>
