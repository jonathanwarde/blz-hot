<h5>Related Posts</h5>
<?php
$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 5, 'post__not_in' => array($post->ID) ) );
if( $related );?>
<ul class="related-posts">
<?php foreach( $related as $post ) {
setup_postdata($post); ?>
    <?php
	$featured_img = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
	//$fallback_img = bloginfo('url');
	$fallback_img = get_template_directory_uri();
    //If the post has a featured image defined use it
    if( has_post_thumbnail() ) {
    echo '<li class="" style="background-image: url(' . $featured_img . ');background-repeat:no-repeat;background-size:cover;background-position:center;">';

    //Default image for all others
    } else {
     echo '<li class="" style="background-image:url('. $fallback_img . '/assets/images/blaze-placeholder.jpg);background-repeat:no-repeat;background-size:cover;background-position:center;">';
    }?>
                    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="related-link"><h5>
				    <?php
                    $thetitle = $post->post_title; /* or you can use get_the_title() */
                    $getlength = strlen($thetitle);
                    $thelength = 55;
                    echo substr($thetitle, 0, $thelength);
                    if ($getlength > $thelength) echo "...";
                    ?></h5></a>
					<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" class="opacity-overlay"></a>
					</li>
<?php }
wp_reset_postdata(); ?>

</ul>
<!--ebd related posts by category-->