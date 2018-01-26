<div class="split-container">
	<div class="row">
	<div class="split-aside split-mobile rellax"></div>
	<section class="split-main medium-12 large-7 columns">
		<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
		    <section class="entry-content" itemprop="articleBody">
		    	<h2><?php the_title();?></h2>
				<?php the_content(); ?>
				<h5 class="other-offerings">Other key services we offer at Blaze:</h5>
				<?php if(is_page('brand-elevation')){

					echo '<ul class="white-buttons">';
					echo '<li>';
					echo '<a class="button" href="/web-design-and-development">Web Development</a>';
					echo '</li>';
					echo '<li>';
					echo '<a class="button" href="/graphic-design-and-print">Graphic Design</a>';
					echo '</li>';
					echo '<li>';
					echo '<a class="button" href="/content-strategy-and-seo">SEO</a>';
					echo '</li>';
					echo '</ul>';

				} elseif(is_page('web-design-and-development')){

					echo '<ul class="white-buttons">';
					echo '<li>';
					echo '<a class="button" href="/brand-elevation">Branding</a>';
					echo '</li>';
					echo '<li>';
					echo '<a class="button" href="/graphic-design-and-print">Graphic Design</a>';
					echo '</li>';
					echo '<li>';
					echo '<a class="button" href="/content-strategy-and-seo">SEO</a>';
					echo '</li>';
					echo '</ul>';
				
				} elseif(is_page('graphic-design-and-print')){

					echo '<ul class="white-buttons">';
					echo '<li>';
					echo '<a class="button" href="/brand-elevation">Branding</a>';
					echo '</li>';
					echo '<li>';
					echo '<a class="button" href="/web-design-and-development">Web Development</a>';
					echo '</li>';
					echo '<li>';
					echo '<a class="button" href="/content-strategy-and-seo">SEO</a>';
					echo '</li>';
					echo '</ul>';

				} elseif(is_page('content-strategy-and-seo')){

					echo '<ul class="white-buttons">';
					echo '<li>';
					echo '<a class="button" href="/brand-elevation">Branding</a>';
					echo '</li>';
					echo '<li>';
					echo '<a class="button" href="/web-design-and-development">Web Development</a>';
					echo '</li>';
					echo '<li>';
					echo '<a class="button" href="/graphic-design-and-print">Graphic Design</a>';
					echo '</li>';
					echo '</ul>';
				
				}
				?>

			</section> <!-- end article section -->
		</article> <!-- end article -->
	</section><!--
 --><aside class="medium-4 large-5 columns">
 	</aside>
 	</div>
 	<div class="split-aside medium-4 large-5 columns rellax" data-rellax-percentage="0.9"></div>
 	<div class="split-scrim medium-4 large-5 columns"></div>
</div>