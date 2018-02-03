<?php get_header();?>

<div class="contentBox">
  <div class="innerBox">

<?php while(have_posts()):the_post();?>

    <div class="contentTitle"><a href="<?php the_permalink();?>">Title: <?php the_title();?></a></div>
    <div class="contentTitle"><a href="<?php the_permalink();?>">Subtitle: <?php echo get_post_meta(get_the_id(),'subtitle', true);?> </a></div>
    <div class="contentText">
      <?php $More ="<a href= '".get_the_permalink()."'> Read More</a>"?>


      <?php echo wp_trim_words(get_the_content(),25,$More)?>
      
    </div>

<?php endwhile;?>

  </div>
</div>

<?php get_footer();?>

<!-- class-27 will start -->
