<?php get_header(); ?>

<!--no sidebar-->
	
		<div class="row">
			<div class="col-sm-12">
			
			<!--define $args-->
			<?php $args = array(
				'post-type' => 'custom-post',
				'orderby' => 'menu_order',
				'order' => 'ASC'
			); ?>
			
			<!--create custom query with $args-->
			<?php 
			$custom_query = new WP_Query($args);
				while (have_posts()) : the_post());?>
					<div class="blog-post">
					<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php the_content(); ?>
				</div>
				<?php endwhile;?>
				
			</div>
		</div>
	<?php get_footer(); ?>