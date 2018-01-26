				<footer class="footer" role="contentinfo">
					<div id="inner-footer" class="row">
						<div class="large-12 medium-12 columns">
							<nav role="navigation">
								<div class="row">
									<div class="medium-8 large-8 columns">
	    							<?php joints_footer_links(); ?>
	    							</div>
	    							<div class="medium-4 large-4 columns" id="tweets">
	    							</div>
	    						</div>
	    					</nav>
	    				</div>
						<div class="large-12 medium-12 columns">
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
						</div>
					</div> <!-- end #inner-footer -->
				</footer> <!-- end .footer -->
			</div>  <!-- end .main-content -->
			<?php get_template_part('parts/content', 'stickylinks');?>
			<?php get_template_part('parts/content', 'contact-form');?>
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
		<script type="text/javascript">
			jQuery(document).ready(function(){
			     var bLazy = new Blazy({
			     	 offset: 100 // Loads images 200px before they're visible
			     })
			});
			document.addEventListener('DOMContentLoaded', function(){
				var trigger = new ScrollTrigger({
				  toggle: {
				    visible: 'visibleClass',
				    hidden: 'hiddenClass'
				  },
				  offset: {
				    x: 0,
				    y: 500
				  },
				  addHeight: true,
				  once: true
				}, document.body, window);
			});
		</script>
		 <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-990682-5', 'blazecommunication.com');
		  ga('send', 'pageview');

		</script>
	</body>
</html> <!-- end page -->