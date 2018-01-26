<?php

if( have_rows('testimonials') ):?>

	<ul class="slick-testimonials">

 	<?php
    while ( have_rows('testimonials') ) : the_row();?>

    	<li>
		<img src="<?php the_sub_field('testimonial_image');?>" alt="">
        <blockquote>
        <?php the_sub_field('testimonial');?>
 		<cite><?php the_sub_field('cite');?></cite>
        </blockquote>
        </li>

    <?php
    endwhile;?>

    </ul>

<?php else :

    // no rows found

endif;

?>