<?php
$original_query = $wp_query;
$wp_query = null;

$args = array(
    'meta_key' => 'artist',
    'meta_value' => 'The Beatles',
    'order' => 'DESC',
    'order_by' => 'date',
    'post_count' => '10'
    );
$wp_query = new WP_Query($args); 
?>

<?php if (have_posts()): ?>
  <h3>This artist also inspired...</h3>
  <ul>
    <?php while (have_posts()) : the_post(); ?>
      <li><a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
          </a>
      </li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>