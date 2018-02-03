<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php wp_head();?>
</head>
<body <?php body_class();?>>



<?php wp_nav_menu(array(
	'theme_locale' => 'main_menu',
	'menu_id' => 'page',
	));
?>

<div id="mainPicture">
  <div class="picture" style="background-image: url('<?php echo header_image();?>');">
    <div id="headerTitle"><?php bloginfo('title');?></div>
    <div id="headerSubtext"><?php bloginfo('description');?></div>
  </div>
</div>