<div id="sidebar1" class="sidebar large-4 medium-4 columns" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar' ); ?>
		
	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						

	<div class="widget" style="background-color: #fbd66b">
			<h4><a href="http://www.nuclearban.org/faqs/">FAQs</a></h4>
	        <p>You have questions, we have answers</p>	
	</div>
	  
	<div class="widget" style="background-color: #e84157">
			<h4><a href="http://www.nuclearban.org/the-humanitarian-impact/">Humanitarian impact</a></h4>
			<p>What are the effects of nuclear weapons on people?</p>
	</div>
	  
	<div class="widget" style="background-color: #245e75">
			<h4><a href="http://www.nuclearban.org/the-environmental-impact/">Environmental impact</a></h4>
			<p>What are the effects on the environment?</p>
	</div>
  
	<?php endif; ?>

</div>