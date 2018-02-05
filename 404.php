<?php get_header();?>

<div class="contentBox">
  <div class="innerBox">

<h1 style="text-align: center; color: red;font-size: 50px">Page not found</h1>
<h2 style="text-align: center; color: red;font-size: 30px;"><a href="<?php echo home_url();?>">Back to home page</a></h2>

<?php get_search_form();?>

<form action="<?php echo home_url();?>" method="GET">
	<input type="text" placeholder="search....." name="s">
</form>

</div>
</div>
<?php get_footer();?>