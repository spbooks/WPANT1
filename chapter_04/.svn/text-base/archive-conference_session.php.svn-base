<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">

			<?php $args = array(
					'posts_per_page' => 30,
					'order' => 'ASC',
					'orderby' => 'title',
					'post_type' => 'conference_session'
				);
			    query_posts($args);
			    if ( have_posts() ) : ?>

				<header class="archive-header">
					<h1>
						Sessions
					</h1>
				</header>
				<p>You'll love our packed timetable! </p>

				<?php twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article class="session">
						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
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
						<?php the_excerpt(); ?>

					</article>

				<?php endwhile; ?>

				<?php twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title">Watch this space!</h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p>We've yet to post any sessions, but if you subscribe to our newsletter you'll be the first to find out!</p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>