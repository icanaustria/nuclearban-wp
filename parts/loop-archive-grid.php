<!--Item: -->
<article id="post-<?php the_ID(); ?>" class="large-6 medium-6 columns archive-article" role="article">

	<section class="featured-image" itemprop="articleBody">
		<?php the_post_thumbnail('medium_large'); ?>
	</section> <!-- end article section -->

	<header class="article-header">
		<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>	
		<?php get_template_part( 'parts/content', 'byline' ); ?>				
	</header> <!-- end article header -->	
	 <!-- end article section -->
					    							
</article> <!-- end article -->
