<?php get_header();?>

<div class="contentBox">
  <div class="innerBox">

<?php while(have_posts()):the_post();?>

    <div class="contentTitle"><a href="<?php the_permalink();?>" style="background:<?php echo get_post_meta(get_the_id(), 'title-bg-color', true)?>; color:<?php echo get_post_meta(get_the_id(), 'title-text-color', true)?>">Title: <?php the_title();?></a></div>

    <div class="contentTitle"><a href="<?php the_permalink();?>" style="background:<?php echo get_post_meta(get_the_id(), 'email-bg-color', true)?>; color:<?php echo get_post_meta(get_the_id(), 'email-text-color', true)?>">Email: <?php echo get_post_meta(get_the_id(), 'email', true);?></a></div>

    <div class="contentTitle"><a href="<?php the_permalink();?>" style="background:<?php echo get_post_meta(get_the_id(), 'sub-bg-color', true)?>; color:<?php echo get_post_meta(get_the_id(), 'sub-text-color', true)?>">Subtitle: <?php echo get_post_meta(get_the_id(),'sub', true);?> </a></div>
    <div class="contentText">
      <?php $More ="<a href= '".get_the_permalink()."'> Read More</a>"?>


      <?php echo wp_trim_words(get_the_content(),25,$More)?>
      
    </div>

<?php endwhile;?>

  </div>
</div>

<?php get_footer();?>

<!-- class-29 will start -->
