<?php

get_header(); ?>

<p>
  this is from <b>index.php</b>
</p>

<?php
if(have_posts()):
  while (have_posts()) : the_post(); ?>

  <article class="post <?php if(has_post_thumbnail() ) { ?> has-thumbnail-class <?php } ?>">

    <div class="thumbnail">
      <?php the_post_thumbnail('for-index'); ?>
    </div>
  <h2> <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a> </h2>



  <?php if ($post->post_excerpt): ?>
    <p>
    <?php echo get_the_excerpt(); ?>
      <a href="<?php the_permalink(); ?>">Read more .. &raquo; </a>
    </p>
    <?php else:
        the_content();
      ?>
  <?php endif; ?>



<?php  endwhile;
  else:
    echo "no content found!";
  endif; ?>

  </article>


<?php get_footer();

  ?>
