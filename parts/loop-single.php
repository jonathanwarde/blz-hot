
<div class="single-page-header row">	
		<div class="large-12 columns" itemprop="headline">
			<h1 class="entry-title single-title"><?php the_title(); ?></h1>
			<p class="byline">
			Posted on <?php the_time('F j, Y') ?> by <?php the_author_posts_link(); ?>
			</p>
		</div>
</div> <!-- end article header -->

</div><!--end page-header-outer-->

<div class="pull-up row">
<div class="large-8 medium-8 columns">
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
    <section class="entry-content" itemprop="articleBody">
		<!--<?php //the_post_thumbnail('full'); ?>-->
		<?php the_content(); ?>
	</section> <!-- end article section -->
	<footer class="article-footer">
		<?php the_category() ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
	</footer> <!-- end article footer -->
</article> <!-- end article -->
</div>
<div id="related-posts" class="sidebar large-4 medium-4 columns" role="complementary">
	<?php get_template_part('parts/content', 'related-posts');?>
</div><!--end related posts-->
</div><!--end row-->