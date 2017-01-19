<?php

get_header();  ?>


<main>

<div id="content">

<article class="page-article">
<p>
  this is from <b>single.php</b>
</p>


<?php if (have_posts()):
    while (have_posts()) : the_post(); ?>
      <h2><?php the_title(); ?></h2>

      <?php the_post_thumbnail('for-single'); ?>

      <p class="post-info">
        <?php the_time('F jS, Y g:i a'); ?>
        | by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
      </p>


      <?php the_content(); ?>
      <?php edit_post_link(); ?>
      <h4 class="custom-fields">Custom fields</h4>
      <?php the_meta(); ?>
      <br>
      <?php comments_template(); ?>



    <?php endwhile;
    else:
    echo "no content";

    endif; ?>

</article>

</div>

<?php get_sidebar(); ?>

</main>


<?php get_footer();

 ?>
