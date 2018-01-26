<section class="blaze-three-panel">
	<div class="row">
		<div class="large-5 columns">
			<div class="row">
				<div class="testimonials large-12 columns">
					<?php get_template_part('parts/content', 'slick-testimonials');?>
				</div><!--end testimonials-->
				<div class="twitter large-12 columns" id="tweets">

				</div><!--end twitter-->
			</div>
		</div>
		<?php
		if( have_rows('featured') ):
		    while ( have_rows('featured') ) : the_row();?>
		<div class="service-box large-7 columns" style="background:url(<?php the_sub_field('featured_image');?>) center center no-repeat;background-size: cover;">
			<?php the_sub_field('html');?>
		    <h2 class="h4"><?php the_sub_field('featured_title');?></h2>
			<?php
			$post_object = get_sub_field('featured_link');
			if( $post_object ):
				// override $post
				$post = $post_object;
				setup_postdata( $post );
				?>
			<a href="<?php the_permalink(); ?>" class=""></a>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>

        </div>
		<?php  endwhile; else :

		    // no rows found

		endif;?>
	</div>
</section>