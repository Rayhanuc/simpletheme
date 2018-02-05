<?php while(have_posts()):the_post();?>

<?php the_title();?>
<p><?php the_content();?></p>

<?php endwhile;?>