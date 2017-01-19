<?php

get_header();  ?>

<article class="page-article clearfix">

  <p>
    this is from <b>front-page.php</b>
  </p>

<?php if (have_posts()):
    while (have_posts()) : the_post(); ?>
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


<!-- front-page-box -->
<?php if (get_theme_mod('test_front_box_display') == 'Yes') { ?>
  <div class="front-page-box-contanier clearfix">
    <div class="front-page-box-image">
      <!-- <img src="<?php echo wp_get_attachment_url(get_theme_mod('test_front_box_img')); ?>" alt=""> -->
      <img src="https://www.vgtmcity.com/wp-content/uploads/2014/05/nunna-Mango-market-1024x768.jpg" width=200px, height=200px, alt="">
    </div>
    <div class="front-page-box-content">
      <h2><a href="<?php echo get_permalink(get_theme_mod('test_front_box_heading_link')); ?>"><?php echo get_theme_mod('test_front_box_heading'); ?></a></h2>
      <!-- <p> <?php echo get_theme_mod('test_front_box_para'); ?></p> -->
      <?php echo wpautop(get_theme_mod('test_front_box_para')); ?>
    </div>
  </div>
<?php } ?>

<!-- front-page-box end -->









<!-- WP_Query loop  -->
<?php
$query1 = new WP_Query('cat=1&posts_per_page=2&orderby=rand&order=ASC');

if($query1->have_posts()) :  ?>
    <h1>list of post in category id 1 using WP_Query</h1>
  <?php
  while ($query1->have_posts()) :  $query1->the_post();  ?>
    <h2> <?php the_title(); ?> </h2>
  <?php  the_content();
  endwhile;
 else:
    echo 'no content';
 endif;
 wp_reset_postdata();
 ?>  <!-- WP_Query loop  end-->



</article>



<?php get_footer();

 ?>
