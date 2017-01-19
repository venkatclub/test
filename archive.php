<?php

get_header(); ?>

<p>
  this is from <b>archive.php</b>
</p>

<?php
if(have_posts()):
  while (have_posts()) : the_post(); ?>

  <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a> </h2>
  <?php the_content(); ?>
<?php  endwhile;
  else:
    echo "no content found!";
  endif;


get_footer();

  ?>
