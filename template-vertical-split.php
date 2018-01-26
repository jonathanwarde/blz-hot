<?php
/*
Template Name: Vertical Split
*/
?>
<?php get_header('split'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php get_template_part( 'parts/loop', 'split' ); ?>
<?php endwhile; endif; ?>
<?php get_footer();