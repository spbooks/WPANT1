<?php if (have_posts()) : $postcounter = 1; ?>

<h1>Latest Posts</h1>
<ul class="mini-list">
	
<?php while (have_posts()) : the_post(); ?>

<li>
  <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> <?php the_time("j M"); ?></h2>
  <p>
    <?php if ($postcounter == 1) {
             the_content();
	  } else {
              the_excerpt();
	    } ?>
  </p>
  <p><?php the_tags( "Tagged with: ", " / ", "" ); ?> </p>
</li>

<?php 
  if (($postcounter % 3) == 0) { ?>
     <li class="break">
       <a href="http://www.example.com">Buy my widgets please</a>
     </li>
<?php  } 
$postcounter++; ?>

<?php endwhile; ?>
</ul>
<?php else: ?>
  <h1>No posts to show</h1>
  <p>Sorry, we got nada. Nothing. Bupkis. Zippo. Diddly-squat. Sorry to disappoint.</p>
<?php endif; ?>