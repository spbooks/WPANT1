//PHP start and end tags omitted so you can copy/paste this directly into agsml_header-license.php

//html for settings form
function agsml_settings_page() { ?>

<div class="wrap agsml_social_list">
  -<h2>Antelope General Social Media Links</h2>

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
