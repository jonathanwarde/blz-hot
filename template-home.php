<?php
/*
Template Name: Home
*/
?>

<?php get_header('home'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php get_template_part( 'parts/loop', 'home' ); ?>

<?php endwhile; endif; ?>

<?php get_template_part('parts/content', 'blaze-services');?>
<!--<?php //get_template_part('parts/content', 'blaze-featured-one');?>-->
<?php get_template_part('parts/content', 'blaze-featured-two-version-three');?>
<?php get_template_part('parts/content', 'blaze-featured-one-version-two');?>
<?php get_template_part('parts/content', 'blaze-featured-two-version-two');?>
<?php get_template_part('parts/content', 'blaze-twitter-testimonials');?>
<!--<?php //get_template_part('parts/content', 'blaze-featured-two');?>-->

<?php get_footer(); ?>
