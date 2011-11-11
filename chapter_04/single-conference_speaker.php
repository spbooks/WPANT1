<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h1 class="entry-title">Speaker Profile: <span><?php the_title(); ?></span></h1>
							<p class="speaker-meta">
							Works at: <?php echo get_post_meta($post->ID, 'conference_speaker_business', true); ?>
							| Visit <a href="<?php echo get_post_meta($post->ID, 'conference_speaker_website_url', true); ?>"><?php echo get_post_meta($post->ID, 'conference_speaker_website_name', true); ?></a>
						    | Comes from: <?php echo get_post_meta($post->ID, 'conference_speaker_location', true); ?>
							</p>
						</header>

						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->
					
					</article>


				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>