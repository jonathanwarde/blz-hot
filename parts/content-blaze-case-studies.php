<section class="blaze-services">
	<div class="row">

		<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$the_query = new WP_Query( array(
			    'post_type' => 'case_study',
			    'posts_per_page' => '8',
			    'paged' => $paged
			) );
			while ( $the_query->have_posts() ) :
			    $the_query->the_post();
		?>

		 <article class="service-box medium-6 large-3 columns">
		    <div class="transform-on-hover">
			 	<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="42px" height="32px" viewBox="0 0 42 32" enable-background="new 0 0 42 32" xml:space="preserve">
				<g>
					<path fill="#000" d="M39,0c-1.654,0-3,1.346-3,3c0,0.888,0.396,1.679,1.011,2.229L28.211,19.26C27.84,19.095,27.431,19,27,19
						c-0.868,0-1.644,0.376-2.193,0.967l-9.073-5.745C15.902,13.848,16,13.436,16,13c0-1.654-1.346-3-3-3s-3,1.346-3,3
						c0,0.904,0.41,1.706,1.044,2.256L4.149,26.231C3.795,26.083,3.407,26,3,26c-1.654,0-3,1.346-3,3s1.346,3,3,3s3-1.346,3-3
						c0-0.888-0.395-1.678-1.01-2.228l6.904-10.99C12.237,15.92,12.609,16,13,16c0.859,0,1.629-0.367,2.176-0.947l9.078,5.748
						C24.093,21.169,24,21.573,24,22c0,1.654,1.346,3,3,3s3-1.346,3-3c0-0.863-0.371-1.636-0.957-2.184l8.81-14.046
						C38.207,5.917,38.594,6,39,6c1.654,0,3-1.346,3-3S40.654,0,39,0z M5,29c0,1.103-0.897,2-2,2s-2-0.897-2-2s0.897-2,2-2
						S5,27.897,5,29z M13,15c-1.103,0-2-0.897-2-2s0.897-2,2-2s2,0.897,2,2S14.103,15,13,15z M27,24c-1.103,0-2-0.897-2-2s0.897-2,2-2
						s2,0.897,2,2S28.103,24,27,24z M39,5c-1.103,0-2-0.897-2-2s0.897-2,2-2s2,0.897,2,2S40.103,5,39,5z"/>
				</g>
				</svg>
			 	<h2 class="h4"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				 	<?php
					$image = get_field('featured_thumbnail');
					$size = '650x325';
					if( $image ) {
						echo wp_get_attachment_image( $image, $size );
					}
					?>
				 	<p>
				 	<svg version="1.1" class="plus-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 42 42" style="enable-background:new 0 0 42 42;" xml:space="preserve" width="1.4rem" hieght="1.4rem">
					<polygon points="42,20 22,20 22,0 20,0 20,20 0,20 0,22 20,22 20,42 22,42 22,22 42,22 " fill="#000"/>
					<g>
					</svg>
				</p>
		 	</div><!--end transform-on-hover-->
		 	<a href="<?php the_permalink();?>"></a>
		 </article>
		<?php endwhile;?>
	</div>
	<div class="pagination row">
	<?php echo get_next_posts_link( 'View Previous Case Study', $the_query->max_num_pages ); // display older posts link ?>
	<?php echo get_previous_posts_link( 'View Next Case Study' ); // display newer posts link ?>
	</div>
	<?php wp_reset_postdata();?>
</section>