<?php

get_header();  ?>

<article class="page-article">

  <p>
    this is from <b>page.php</b>
  </p>

<?php if (have_posts()):
    while (have_posts()) : the_post(); ?>


      <?php
        $args = array('child_of' => test_get_top_an(),
        'title_li' => ""
      );
      ?>

      <?php wp_list_pages($args); ?>


      <h2><?php the_title(); ?></h2>

      <p class="post-info">
        <?php the_time('F jS, Y g:i a'); ?>
        | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
      </p>

      <?php the_content(); ?>
    <?php endwhile;
    else:
    echo "no content";

    endif; ?>




</article>



<?php get_footer();

 ?>
