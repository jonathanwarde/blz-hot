<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="portfolio-page-header">
	<div class="row">
		<div class="medium-12 large-8 columns">
		<h1 class="page-title"><?php the_title(); ?></h1>
		</div>
	</div>
</section>
</div><!--end page-header-outer-->
<div class="row">
	<div class="large-8 medium-8 columns border-right">
	<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	    <section class="entry-content" itemprop="articleBody">	
			<?php the_content(); ?>
		</section> <!-- end article section -->
	</article> <!-- end article -->
	</div>
	<?php get_sidebar(); ?>
</div><!--end row-->
<?php endwhile; endif; ?>
<?php get_footer(); ?>
