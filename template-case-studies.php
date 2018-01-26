<?php
/*
Template Name: Case Studies
*/
?>

<?php get_header('general'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<section class="portfolio-page-header">
		<div class="row">
			<div class="medium-12 large-8 columns">
				<!--<span class="article-type-label"><p>Case studies</p></span>-->
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php the_content();?>
			</div>
		</div>
	</section>
</div><!--end page-header-outer-->
<?php endwhile; endif; ?>
<?php get_template_part('parts/content', 'blaze-case-studies');?>
<?php get_template_part('parts/content', 'blaze-twitter-testimonials');?>
<?php get_footer(); ?>