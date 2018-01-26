</div><!--end page-header-outer-->

<section class="portfolio-page-header">
	<div class="row">
		<div class="medium-12 medium-centered columns">
			<span class="article-type-label"><p>Case study</p></span>
			<h1 class="entry-title single-title"><?php the_title(); ?></h1>
			<h4>Subtitle explaining what we did goes here</h4>
		</div>
	</div>
</section>


<section class="portfolio" style="padding-top: 3rem;">
	<div class="row">
	<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$the_query = new WP_Query( array(
	    'post_type' => 'case_study',
	    'posts_per_page' => '1',
	    'paged' => $paged
	) );
	while ( $the_query->have_posts() ) :
	    $the_query->the_post();?>
	<div class="medium-8 columns medium-centered">
		<?php the_content();?>
	</div>
	<?php endwhile;?>
	</div><!--end row-->
	<div class="pagination row">
	<?php echo get_next_posts_link( 'View Previous Case Study', $the_query->max_num_pages ); // display older posts link ?>
	<?php echo get_previous_posts_link( 'View Next Case Study' ); // display newer posts link ?>
	</div>
	<?php
	/* Restore original Post Data
	 * NB: Because we are using new WP_Query we aren't stomping on the
	 * original $wp_query and it does not need to be reset.
	*/
	wp_reset_postdata();

	?>
</section>