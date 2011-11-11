<?php
/**
 * This index.php can be used to override the one in Twenty Ten if you make a child theme with it.
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">
			
			<?php
			$args = array(
				'post_type' => 'attachment',
				'post_mime_type' => 'image',
				'numberposts' => 12,
				'post_status' => 'inherit'
			); 
		$attachments = get_posts( $args );
		foreach($attachments as $post) : setup_postdata($post); ?>
			<div class="galleryitem">
			<?php the_attachment_link($post->post_ID,false,false,true); ?>			
			</div>
		<?php endforeach; ?>

			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
