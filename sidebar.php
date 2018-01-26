<div id="related-posts" class="sidebar large-4 medium-4 columns" role="complementary">
	
	<!--<?php //if ( is_active_sidebar( 'sidebar1' ) ) : ?>-->

	<?php if(is_page('contact-us')):?>

		<?php dynamic_sidebar( 'sidebar2' ); ?>


	<?php else : ?>

	<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php endif; ?>

</div>