<div class="blog-post-single">
            <h2 class="blog-post-title blog-post-title-single"><?php the_title();?></h2>
			<p class="blog-post-meta blog-post-meta-single"><?php the_date();?> by <a href="#"><?php the_author(); ?></a></p>

			<?php if ( has_post_thumbnail() ) {
			  the_post_thumbnail();
			} ?>
		   
		   <?php the_content(); ?>
          </div><!-- /.blog-post -->

 