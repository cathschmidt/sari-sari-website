<?php
get_template_part('head');
?>

<?php
get_template_part('header');
?>

<div class="event-wrapper">
	<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
</div><!-- /.blog-post -->


<?php
get_template_part('footer');
?>

<?php
get_template_part('foot');
?>