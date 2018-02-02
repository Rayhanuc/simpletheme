<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<title>this is our first web site</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php wp_head();?>
</head>
<body <?php body_class();?>>
<div id="page">
  <div class="topNaviagationLink"><a href="#">Home</a></div>
  <div class="topNaviagationLink"><a href="#">About</a></div>
  <div class="topNaviagationLink"><a href="#">Portfolio</a></div>
  <div class="topNaviagationLink"><a href="#">Services</a></div>
  <div class="topNaviagationLink"><a href="#">Contact</a></div>
</div>
<div id="mainPicture">
  <div class="picture" style="background-image: url('<?php echo header_image();?>');">
    <div id="headerTitle"><?php bloginfo('title');?></div>
    <div id="headerSubtext"><?php bloginfo('description');?></div>
  </div>
</div>