<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#000">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#000">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link href="https://fonts.googleapis.com/css?family=Heebo:700,900|Quicksand:300,400" rel="stylesheet">

		<?php wp_head();
			$feat_image_small = wp_get_attachment_image_src(get_post_thumbnail_id($post_array->ID), 'full')[0];
			$feat_image_large = wp_get_attachment_image_src(get_post_thumbnail_id($post_array->ID), 'full')[0];
			echo '<style>
			body.single,
			body.page-template-template-case-studies .page-header-outer
			{
				background:url('. $feat_image_small .') bottom right no-repeat;
				background-size:contain;
	        }
	        body.page-template-template-general .page-header-outer,
	        body.page-template-template-portfolio .page-header-outer
	        {
				background:url('. $feat_image_small .') center center no-repeat;
				background-size:cover;
	        }
	        body.page-template-template-case-studies .page-header-outer/*,
	        body.page-template-template-portfolio .page-header-outer*/
	     
			{
				background:url('. $feat_image_small .') bottom left no-repeat;
				background-size:contain;
	        }
	        @media only screen and (min-width:768px){
				body.single,
				body.page-template-template-case-studies .page-header-outer,
				body.page-template-template-general .page-header-outer
				{
					background:url('. $feat_image_large .') no-repeat;
					/*background-position:150% 100%;*/
					background-size:contain;
					background-position:top center;
					/*animation: backgroundSlideIn 2s cubic-bezier(0.39, 0.575, 0.565, 1) forwards;*/

				}
				body.page-template-template-case-studies .page-header-outer,
				/*body.page-template-template-portfolio .page-header-outer,*/
				body.page-template-template-general .page-header-outer
				{
					background:url('. $feat_image_large .') no-repeat;
					background-position:bottom left;
					background-size:contain;

				}
				body.page-template-template-general .page-header-outer,
				body.page-template-template-portfolio .page-header-outer
		        {
					background:url('. $feat_image_large .') center center no-repeat;
					background-size:cover;
		        }
	        }
	        </style>';
        ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
	<body <?php body_class(); ?>>

		<div class="off-canvas-wrapper">
							
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div class="off-canvas-content" data-off-canvas-content>
			
			   <div class="page-header-outer">
				<header class="header fixed-header" role="banner">
						
					 <!-- This navs will be applied to the topbar, above all content 
						  To see additional nav styles, visit the /parts directory -->
					 <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
	 	
				</header> <!-- end .header -->