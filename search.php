<?php

get_header(); ?>

<p>
  this is from <b>search.php</b>
</p>
<h2>search results for <?php the_search_query(); ?></h2>
<?php
if(have_posts()):
  while (have_posts()) : the_post(); ?>

  <article class="post <?php if(has_post_thumbnail() ) { ?> has-thumbnail-class <?php } ?>">

    <div class="thumbnail">
      <?php the_post_thumbnail('for-index'); ?>
    </div>
  <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a> </h2>



  <?php the_excerpt(); ?>



<?php  endwhile;
  else:
    echo "no content found!";
  endif; ?>

  </article>


<?php get_footer();

  ?>
