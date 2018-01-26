<?php
/*
Template Name: Portfolio
*/
?>
<?php get_header('general'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="portfolio-page-header">
	<div class="row">
		<div class="medium-12 large-8 columns">
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?php the_content();?>
		</div>
	</div>
</section>
</div><!--end page-header-outer-->
<?php endwhile; endif; ?>
<?php get_template_part( 'parts/loop', 'portfolio' ); ?>
<?php get_footer(); ?>
