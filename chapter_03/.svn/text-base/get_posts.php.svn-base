<?php $args = array(
    'numberposts' => 30,
    'tag' => 'wordpress+tutorial',
    'order' => 'ASC',
    'order_by' => 'date'
);

$tutorials = get_posts($args);
foreach($tutorials as $post) : setup_postdata($post); ?>
    <h2><a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
      </a>
    </h2>
    <?php the_excerpt(); ?>
<?php endforeach; ?>