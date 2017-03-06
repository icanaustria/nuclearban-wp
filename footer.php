
					<div id="newsletter-row" class="row">
							<div class="large-6 medium-6 align-self-top columns">
								
								<?php if ( is_active_sidebar( 'newsletter-footer' ) ) : ?>

									<?php dynamic_sidebar( 'newsletter-footer' ); ?>
										
								<?php endif; ?>
								
							</div>
							<div class="large-2 medium-2 columns">
							</div>
							<div id="donation-button" class="large-4 medium-4 columns"><a href="http://www.icanw.de/spenden/"><button type="button" class="button large expanded primary">SPENDEN</button></a></div>
					</div>
					<div class="social-media-row row">
						<div class="social-media-group large-12 medium-12 columns">
							<p>Folge uns:</p>
							<a class="social-media round" href="https://twitter.com/ican_de" alt="Follow us on Twitter"><i class="fi-social-twitter large"></i></a>
							<a class="social-media round" href="https://www.flickr.com/photos/30835738@N03/" alt="Watch photos on Flickr"><i class="fi-social-flickr large"></i></a>
							<a class="social-media round" href="https://www.facebook.com/ICAN.Germany"  alt="Get the latest news on Facebook"><i class="fi-social-facebook large"></i></a>
							<a class="social-media round" href="https://www.youtube.com/user/icandeutschland" alt="Watch our videos on YouTube"><i class="fi-social-youtube large"></i></a>
						</div>
					</div>
					</div>

					<footer class="footer" role="contentinfo">		
						<div class="inner-footer row">
							<div class="large-8 medium-8 columns">
								
								<?php if ( is_active_sidebar( 'footbar' ) ) : ?>

									<?php dynamic_sidebar( 'footbar' ); ?>
		
								<?php else : ?>

								<p>Please add a widget to the footbar.</p>
								
								<?php endif; ?>
											        						 
						    </div>
							<div class="large-2 medium-2 columns">
								<img class="hide-for-small-only" src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/themes/nuclearban-wp/assets/images/logo.svg")>
							</div>	
						</div> <!-- end #inner-footer -->
						<div id="nav-footer" class="row">
							<div class="large-12 medium-12 small-12 columns">
								
							</div>
						</div>
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->