</div><!--end page-header-outer-->

<section class="page-header-wrap">
	<div class="general-page-header">
		<div class="row white-opacity-bg">
			<div class="large-12 columns" itemprop="headline">
				<h1 class="entry-title single-title"><?php the_title(); ?></h1>
			</div>
		</div>
	</div> <!-- end article header -->

	<div class="page-background-image"></div>
</section>


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