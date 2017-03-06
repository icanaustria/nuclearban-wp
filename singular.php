<?php get_header(); ?>
			
	<div id="content">
		
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div id="pre-content" class="expanded">
			
				<?php 	if ( has_post_thumbnail() ) {
							the_post_thumbnail( 'full' );
						}
						else {
							echo "<div class='row'><div class='inner-pre-content large-12 medium-12 columns'><h1>";
							the_title();
							echo "</h1></div></div>";
						}
				?>		
			
		</div>
	
		<div id="inner-content" class="row">

		    <main id="main" class="large-8 medium-8 columns" role="main">
			    	
		    	<?php get_template_part( 'parts/loop', 'page' ); ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

																							
			</main> <!-- end #main -->
			
			<?php get_sidebar( ); ?>
		    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>