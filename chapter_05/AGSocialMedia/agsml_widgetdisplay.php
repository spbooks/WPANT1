//PHP start and end tags omitted so you can copy/paste this directly into agsml_header-license.php

	/* Display the widget  */
	function widget( $args, $instance ) {
				
		//get widget arguments
		extract($args);
		//get widget title from instance variable
		$title = apply_filters('widget_title', $instance['title']);
		
		//insert before widget markup
		echo $before_widget;
		
		//if theres a title, echo it.
		if( $title ) 
		 echo $before_title . $title . $after_title;
	
		//start list
		$social_list .= '<ul>';
		
		// define list
		if (get_option('agsml_facebook' ))		{ 
			$social_list .= '<li class="facebook"><a href="'.get_option('agsml_facebook').'">' . __('Friend us on Facebook', 'agsml') .'</a></li>';		
		} 
		if (get_option('agsml_twitter' ))	{ 
			$social_list .= '<li class="twitter"><a href="'.get_option('agsml_twitter').'">' . __('Follow us on Twitter', 'agsml') .'</a></li>';		
		}
		if (get_option('agsml_linkedin' ))		{ 
			$social_list .= '<li class="linkedin"><a href="'.get_option('agsml_linkedin').'">' . __('Link us on LinkedIn', 'agsml') .'</a></li>';		
		}
		if (get_option('agsml_youtube' ))		{ 
			$social_list .= '<li class="youtube"><a href="'.get_option('agsml_youtube').'">' . __('Watch us on Youtube', 'agsml') .'</a></li>';		
		}
		// end list
		$share_content .= '</ul>';

		//display assembled list
		echo $social_list;
		
		//insert before widget markup
		echo $after_widget;
	
	}