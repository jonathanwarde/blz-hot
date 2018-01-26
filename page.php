<?php get_header('page'); ?>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<?php get_template_part( 'parts/loop', 'page' ); ?>
		    	
    <?php endwhile; else : ?>

   		<?php get_template_part( 'parts/content', 'missing' ); ?>

    <?php endif; ?>

<?php get_footer(); ?>