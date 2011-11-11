<?php
/*
Plugin Name: Antelope General Social Media Links
Plugin URI: http://mickolinik.com/plugins/antelope-social-media-links
Description: Easily add links to your social media profiles
Version: 1.0
Author: Mick Olinik
Author URI: http://www.mickolinik.com
*/

/*  Copyright 2011  Mick Olinik  (email : mick@rockstarcoding.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//load textdomain for localization settings
load_plugin_textdomain('agsml', false, basename( dirname( __FILE__ ) ) . '/languages' );

add_action('admin_menu', 'agsml_create_menu');

function agsml_create_menu() {

  //create new top-level menu
  add_options_page('Antelope General Social Media Links', 'AG Social Media Links', 'manage_options', __FILE__, 'agsml_settings_page');
  add_filter( "plugin_action_links", "agsml_settings_link", 10, 2 );
  //call register settings function
  add_action( 'admin_init', 'agsml_register_settings' );
}


//add settings link to plugins list
function agsml_settings_link($links, $file) {
  static $this_plugin;
  if (!$this_plugin) $this_plugin = plugin_basename(__FILE__);
  if ($file == $this_plugin){
    $settings_link = '<a href="options-general.php?page=AGSocialMedia/antelope-social-media-links.php">'.__("Settings", "agsml_social_media").'</a>';
    array_unshift($links, $settings_link);
  }
  return $links;
  }

function agsml_register_settings() {
  //register our settings
  register_setting( 'antelope_social_group', 'agsml_facebook' );
  register_setting( 'antelope_social_group', 'agsml_twitter' );
  register_setting( 'antelope_social_group', 'agsml_youtube' );	
  register_setting( 'antelope_social_group', 'agsml_linkedin' );
}

//create css for admin screen
function agsml_admin_css() { ?>
<style type="text/css"  >

.agsml_social_list {padding-top:15px;}
.agsml_social_list .setting {display:block;padding:1em;}
.agsml_social_list .setting p.label_title {font-size:12px;font-weight:bold;display:block;margin-bottom:5px;}
.agsml_social_list .setting label.no_bold {font-weight:normal;}
.agsml_social_list .setting label span.slim {width:200px;float:left;display:block;margin: 1px;padding: 3px;}
.agsml_social_list .setting p.desc {font-size:10px;font-style:italic;text-indent:10px; text-align:left;}
</style>

<?php }
add_action('admin_head', 'agsml_admin_css');

//html for settings form
function agsml_settings_page() { ?>

<div class="wrap agsml_social_list">
  <h2>Antelope General Social Media Links</h2>

  <form method="post" action="options.php">
    <?php settings_fields( 'antelope_social_group' ); ?>


        <div class="setting">

        <p class="label_title"><?php _e('Facebook Profile URL:', 'agsml') ?></p>
        <p><label class="no_bold" for="agsml_facebook"><span class="slim"><?php _e('Facebook URL', 'agsml') ?></span>
        <input name="agsml_facebook" type="text" id="agsml_facebook" value="<?php form_option('agsml_facebook'); ?>" /></label></p>
        <p class="desc"><?php _e('Enter the URL to your Facebook profile.') ?></p>

        <p class="label_title"><?php _e('Twitter Profile URL:', 'agsml') ?></p>
        <p><label class="no_bold" for="agsml_twitter"><span class="slim"><?php _e('Twitter URL', 'agsml') ?></span>
        <input name="agsml_twitter" type="text" id="agsml_twitter" value="<?php form_option('agsml_twitter'); ?>" /></label></p>
        <p class="desc"><?php _e('Enter the URL to your Twitter profile.') ?></p>     
        
        <p class="label_title"><?php _e('YouTube Profile URL:', 'agsml') ?></p>
        <p><label class="no_bold" for="agsml_youtube"><span class="slim"><?php _e('YouTube URL', 'agsml') ?></span>
        <input name="agsml_youtube" type="text" id="agsml_youtube" value="<?php form_option('agsml_youtube'); ?>" /></label></p>
        <p class="desc"><?php _e('Enter the URL to your YouTube profile.') ?></p>

        <p class="label_title"><?php _e('LinkedIn Profile URL:', 'agsml') ?></p>
        <p><label class="no_bold" for="agsml_linkedin"><span class="slim"><?php _e('LinkedIn URL', 'agsml') ?></span>
        <input name="agsml_linkedin" type="text" id="agsml_linkedin" value="<?php form_option('agsml_linkedin'); ?>" /></label></p>
        <p class="desc"><?php _e('Enter the URL to your LinkedIn profile.', 'agsml') ?></p>             

        <p class="setting">
        <input type="submit" class="button-primary" value="<?php _e('Save Social Media Links', 'agsml') ?>" />
        </p>

        </div>

  </form>

</div>

<?php }

function agsml_enqueue_styles() {

  // url to stylesheet
  $agsml_css_url= WP_PLUGIN_URL . '/' . plugin_basename(dirname(__FILE__)) .'/agsml-widget.css';
       
  //register and enqueue stylesheet
  wp_register_style('agsml_styles', $agsml_css_url);
  wp_enqueue_style( 'agsml_styles');
        
}

add_action( 'wp_print_styles', 'agsml_enqueue_styles' );

/* Register the widget */
function agsml_register_widget() {
  register_widget( 'Antelope_Widget' );
}

/* Begin Widget Class */
class Antelope_Widget extends WP_Widget {

/* Widget setup  */
function Antelope_Widget() {
  $widget_ops = array('classname' => 'agsml_widget', 'description' => __( 'Your Social Media Links', 'agsml') );
  // The actual widget code goes here
  parent::WP_Widget( false, $name = 'AG Social Media Links', $widget_ops );
}

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
  if (get_option('agsml_facebook' )){ 
    $social_list .= '<li class="facebook"><a href="'.get_option('agsml_facebook').'">' . __('Friend us on Facebook', 'agsml') .'</a></li>';
  } 
  if (get_option('agsml_twitter' )){ 
    $social_list .= '<li class="twitter"><a href="'.get_option('agsml_twitter').'">' . __('Follow us on Twitter', 'agsml') .'</a></li>';
  }
  if (get_option('agsml_linkedin' )){ 
    $social_list .= '<li class="linkedin"><a href="'.get_option('agsml_linkedin').'">' . __('Link us on LinkedIn', 'agsml') .'</a></li>';
  }
  if (get_option('agsml_youtube' )){ 
    $social_list .= '<li class="youtube"><a href="'.get_option('agsml_youtube').'">' . __('Watch us on Youtube', 'agsml') .'</a></li>';
  }
  // end list
  $share_content .= '</ul>';

  //display assembled list
  echo $social_list;
 
  //insert before widget markup
  echo $after_widget;

}

/* Update the widget settings, just the title in this case  */
function update( $new_instance, $old_instance ) {
  $instance = $old_instance;
  $instance['title'] = strip_tags($new_instance['title']);
  return $instance;
}

//form to display in widget settings.  Allows user to set title of widget.
function form( $instance ) {
  $title = esc_attr($instance['title']);
     ?>
        <p>
          <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label> 
          <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <?php 
}
} // end of Antelope_Widget class


/* Load the widget */
add_action( 'widgets_init', 'agsml_register_widget' );
?>