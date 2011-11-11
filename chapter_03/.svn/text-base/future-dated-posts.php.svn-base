<?php
$original_query = $wp_query;
$wp_query = null;
$args = array(
    'post_status' => 'future',
    'order' => 'ASC',
    'order_by' => 'date',
    'post_count' => '3'
    );
$wp_query = new WP_Query($args);
?>

<?php
if (have_posts()) : while (have_posts()) : the_post(); ?>

<h2><?php the_title(); ?></h2>
<p><?php the_excerpt(); ?></p>  
<?php
$now = time(ÕUÕ);
$posted = get_the_time(ÕUÕ);
echo "Going live in " . human_time_diff($posted, $now) . " time";

?>
<?php endwhile;
else: ?>
    <p>No future posts are planned.</p>
<?php endif; ?>