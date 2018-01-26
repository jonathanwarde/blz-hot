<section class="portfolio">
	<div class="row">
	<?php
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$the_query = new WP_Query( array(
	    'post_type' => 'portfolio',
	    'posts_per_page' => '9',
	    'paged' => $paged
	) );
	while ( $the_query->have_posts() ) :
	    $the_query->the_post();?>
	<div class="portfolio-thumb-outer">
		<div class="portfolio-thumb-inner" style="background:url(<?php echo the_post_thumbnail_url('600x450');?>) no-repeat center center;background-size: cover;"></div><!--end portfolio thumb inner-->
			<div class="portfolio-item-details">
			<h4><?php the_title();?></h4>
			<a href="<?php the_permalink();?>" class="button small">
				Read more
			</a>
			</div><!--end portfolio-item-details-->
			<!--<div class="portfolio-categories">
			<?php
			// here we echo out the CUSTOM taxonomines registered with PORTFOLIO CPT
			//$terms = get_the_terms($post->ID, 'work' );
			//if ($terms && ! is_wp_error($terms)) :
			  //  $tslugs_arr = array();
			    //foreach ($terms as $term) {
			      //  $tslugs_arr[] = $term->slug;
			    //}
			    //$terms_slug_str = '<span class="button small">'. join( "</span><span class='button small'>", $tslugs_arr) . '</span>';
			//endif;
			//echo $terms_slug_str;
			?>
			</div><!end portfolio categories-->
	</div>
	<?php endwhile;?>
	</div><!--end row-->
	<div class="pagination row">
	<?php echo get_next_posts_link( 'Older Entries', $the_query->max_num_pages ); // display older posts link ?>
	<?php echo get_previous_posts_link( 'Newer Entries' ); // display newer posts link ?>
	</div>
	<?php
	/* Restore original Post Data
	 * NB: Because we are using new WP_Query we aren't stomping on the
	 * original $wp_query and it does not need to be reset.
	*/
	wp_reset_postdata();

	?>
</section>