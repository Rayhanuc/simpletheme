	
<?php 

/* Template Name: team */ 

?>

<?php get_header();?>


<div class="contentBox">
  <div class="innerBox">



  <!-- Meet the team -->
	<div class="row">

  <?php
    $teamQuery = new WP_Query(array(
      'post_type' => 'team',

    ));
  ?>

  <?php while($teamQuery -> have_posts()):$teamQuery -> the_post();?>

  <div class="column">
    <div class="card">
      <?php the_post_thumbnail();?>
      <div class="container">
        <h2><?php the_title();?></h2>
        <p class="title"><?php echo get_post_meta(get_the_id(),'designation', true)?></p>
        <p><?php echo get_post_meta(get_the_id(),'content', true)?></p>
        <p><?php echo get_post_meta(get_the_id(),'email', true)?></p>
        <p><a href="<?php echo get_post_meta(get_the_id(),'button_url', true);?>"><button class="button" style="background:<?php echo get_post_meta(get_the_id(),'btn-bg-color', true);?>"><?php echo get_post_meta(get_the_id(),'button_text', true);?></button></a></p>
      </div>
    </div>
  </div>

  <?php endwhile;?>

  </div>
  </div>
  </div>
  <?php get_footer();?>