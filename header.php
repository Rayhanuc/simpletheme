<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<title>this is our first web site</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/anoceanofsky.css" />
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
    <div id="headerTitle">this is our first web site</div>
    <div id="headerSubtext">Free CSS Website Template</div>
  </div>
</div>