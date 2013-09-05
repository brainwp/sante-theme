			<!-- begin #footer -->
			<footer id="footer">
			
				<div class="container clearfix">
					
					<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>

						<?php dynamic_sidebar( 'footer-sidebar' ); ?>

					<?php else : ?>

						<!-- This content shows up if there are no widgets defined in the backend. -->
						
						<div class="one-fourth">
						
							<!-- This content shows up if there are no widgets defined in the backend. -->
			
							<div class="help">
							
								<p>
									<?php _e("Please activate some Widgets.", "site5framework"); ?>

									<?php if(current_user_can('edit_theme_options')) : ?>
									<a href="<?php echo admin_url('widgets.php')?>" class="add-widget"><?php _e("Add Widget", "site5framework"); ?></a>
									<?php endif ?>
								</p>
							
							</div>
						
						</div>

					<?php endif; ?>
					
					
					
				</div> <!-- end #footerWidgets -->
				
				<!-- begin #copyright -->
				<div id="copyrights">
					<div class="container clearfix">

						<span class="right">
							<a class="backtotop" href="#">↑</a>
						</span>

						
						<?php if(of_get_option('sc_footer_copyright') == '') { ?>
						&copy; <?php bloginfo('name'); ?> is powered by <a href="http://wordpress.org/" title="WordPress">WordPress</a> <span class="amp">&amp;</span> <a href="http://www.site5.com" title="SimpleCorp">SimpleCorp</a>.
						<?php } else { ?>
						<?php echo of_get_option('sc_footer_copyright')  ?>
						<?php } ?>
						<!-- Site5 Credits-->
						<br>Criado pela <a href="http://brasa.art.br/">Brasa</a> com o maravilhoso <a href="http://br.wordpress.org">WordPress</a>. 

						
					</div>
				</div>
				<!-- end #copyright -->
				
								<div id="pre-header">
					<!-- begin #socialIcons -->
					<div id="social-icons">
						<ul id="social-links">
							<?php if(of_get_option('sc_facebook')!='') : ?>
							<li class="facebook-link"><a href="<?php echo of_get_option('sc_facebook') ?>" class="facebook" id="social-01" title="<?php _e( 'Join Us on Facebook!', 'site5framework' ); ?>">Facebook</a></li>
							<?php endif ?>
							<?php if(of_get_option('sc_twitter')!=''): ?>
							<li class="twitter-link"><a href="<?php echo of_get_option('sc_twitter') ?>" class="twitter" id="social-02" title="<?php _e( 'Follow Us on Twitter', 'site5framework' ); ?>">Twitter</a></li>
							<?php endif ?>
							<?php if(of_get_option('sc_googleplus')!=''): ?>
							<li class="google-link"><a href="<?php echo of_get_option('sc_googleplus') ?>" id="social-03" title="<?php _e( 'Google+', 'site5framework' ); ?>" class="google">Google</a></li>
							<?php endif ?>
							<?php if(of_get_option('sc_dribble')!=''): ?>
							<li class="dribbble-link"><a href="<?php echo of_get_option('sc_dribble') ?>" id="social-04" title="<?php _e( 'Dribble', 'site5framework' ); ?>" class="dribbble">Dribble</a></li>
							<?php endif ?>
							<?php if(of_get_option('sc_vimeo')!=''): ?>
							<li class="vimeo-link"><a href="<?php echo of_get_option('sc_vimeo') ?>" id="social-05" title="<?php _e( 'Vimeo', 'site5framework' ); ?>" class="vimeo">Vimeo</a></li>
							<?php endif ?>
							<?php if(of_get_option('sc_skype')!=''): ?>
							<li class="skype-link"><a href="<?php echo of_get_option('sc_skype') ?>" id="social-06" title="<?php _e( 'Skype', 'site5framework' ); ?>" class="skype">Skype</a></li>
							<?php endif ?>
							<?php if(of_get_option('sc_linkedin')!=''): ?>
							<li class="linkedin-link"><a href="<?php echo of_get_option('sc_linkedin') ?>" id="social-07" title="<?php _e( ' LinkedIn', 'site5framework' ); ?>" class="linkedin">Linkedin</a></li>
							<?php endif ?>
							<?php if(of_get_option('sc_pinterest')!=''): ?>
							<li class="pinterest-link"><a href="<?php echo of_get_option('sc_pinterest') ?>" id="social-09" title="<?php _e( 'Pinterest', 'site5framework' ); ?>" class="pinterest">Pinterest</a></li>
							<?php endif ?>
							<?php if(of_get_option('sc_rss')=='1'): ?>
								<li class="rss-link"><a href="<?php echo of_get_option('sc_extrss') ?  of_get_option('sc_extrss') : bloginfo('rss_url'); ?>" id="social-08" title="<?php _e( 'RSS', 'site5framework' ); ?>" class="rss">RSS Feeds</a></li>
						<?php endif ?>
						</ul>
					</div>
					 <select id="responsive-social-menu" onchange = "javascript:window.location.replace(this.value);"><option selected="selected" ><?php _e('Social Links', 'site5framework'); ?></select>
					 <!-- end #socialIcons -->
				</div>
				<!-- end #pre-header -->
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- scripts are now optimized via Modernizr.load -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/js/scripts.js" type="text/javascript"></script>
		
		<!--[if lt IE 7 ]>
  			<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
  			<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
		<![endif]-->
		
		<?php wp_footer(); // js scripts are inserted using this function ?>
		
	</body>

</html>