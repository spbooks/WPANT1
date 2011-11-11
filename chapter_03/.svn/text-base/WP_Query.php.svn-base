<?php
$original_query = $wp_query;
$wp_query = null;

$args = array(
    'numberposts' => 30,
    'tag' => 'wordpress+tutorial',
    'order' => 'ASC',
    'order_by' => 'date',
    'paged' => $paged
    );
$wp_query = new WP_Query($args);
?>

<?php if ($wp_query->have_posts()): ?>
<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
  <h2><a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </h2>
  <?php the_excerpt(); ?>
<?php endwhile; else: ?>
    ... something to show if there were no posts
<?php endif; ?>