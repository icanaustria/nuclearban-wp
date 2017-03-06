<?php get_header(); ?>
			
	<div id="content">
		
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="pre-content" class="expanded">
			<?php the_post_thumbnail('full'); ?>
			<div class="pre-content-newsletter row">
		      <div class="medium-5 columns">
			      <?php if ( is_active_sidebar( 'newsletter-frontpage' ) ) : ?>

									<?php dynamic_sidebar( 'newsletter-frontpage' ); ?>
										
								<?php endif; ?>
		      </div>
		    </div>	
		</div>
	
		<div id="inner-content" class="row">

		    <main id="main" class="medium-12 columns" role="main">			    	
		
		    	<?php get_template_part( 'parts/loop', 'page' ); ?>
		    	
		    <?php endwhile; else : ?>
		
				<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>
												
			</main> <!-- end #main -->
		    
	    </div> <!-- end #inner-content -->    
	    
	    <div class="petition-row expanded">
		    <div class="row">
				<div id="petition" class="petition medium-12 columns">
			
					<?php echo do_shortcode( '[contact-form-7 id="62" title="Petition"]' ); ?>
					
					</div>
		
				</div>	
				
			</div>	
		</div>    
	    
	</div> <!-- end #content -->
	
<?php get_footer(); ?>