<?php get_header(); ?>
			
	<div id="content">

		<div id="inner-content" class="row">
	
			<main id="main" class="large-7 medium-7 columns" role="main">

				<article id="content-not-found">
				
					<header class="article-header">
						<h1><?php _e( '404 Error', 'jointswp' ); ?></h1>
					</header> <!-- end article header -->
			
					<section class="entry-content">
						<h4><?php _e( 'The page or post that you were looking for was not found', 'jointswp' ); ?></h4>
						<p>Try searching again, there's bound to be something to take your fancy.</p>
					</section> <!-- end article section -->

					<section class="search">
					    <p><?php get_search_form(); ?></p>
					</section> <!-- end search section -->
			
				</article> <!-- end article -->
	
			</main> <!-- end #main -->

			<aside  class="large-5 medium-5 columns">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/404.jpg" alt="404 not found">
			</aside>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>