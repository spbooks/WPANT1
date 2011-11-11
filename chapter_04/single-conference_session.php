<?php
/**
 * The Template for displaying all single sessions.
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
							<h1 class="entry-title"><?php the_title(); ?></h1>
							<div class="session-meta">
							<dl>
							<dt>Where</dt>
							<dd><?php echo get_post_meta($post->ID, 'conference_session_room', true); ?></dd>
							<dt>When</dt>
							<dd><?php echo get_post_meta($post->ID, 'conference_session_date', true); ?></dd>
							<?php if(taxonomy_exists('conference_topics')) { 
								echo get_the_term_list( $post->ID, 'conference_topics', '<dt>Topics</dt><dd>', ', ', '</dd>' ); 
								 } ?>
							</dl>
							</div>
						</header>

						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->
					
					</article>
				<?php endwhile; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>