<?php
get_template_part('head');
?>

<?php
get_template_part('header');
?>
	<div>
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            get_template_part( 'content-single', get_post_format() );
            endwhile; endif;
        ?>
	</div>
<?php
get_template_part('footer');
?>

<?php
get_template_part('foot');
?>