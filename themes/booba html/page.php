			<?php 
			//on appelle le fichier header.php
			get_header(); ?>

			<section id="container">

				<div id="main-content">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div id="post-container">
						<h1><?php the_title(); ?></h1>
						<div id="post-thumb">
							<?php the_post_thumbnail('single'); ?>
						</div>

						<div id="post-content" class="typo">
							<?php the_content(); ?>
						</div>
						
					</div>
				<?php endwhile; endif; ?>
				</div> <!-- #main-content -->
			

				<div id="sidebar">
					<?php dynamic_sidebar('main-sidebar'); ?>
				</div><!-- #sidebar -->
				
				<div class="clear"></div>
			</section><!-- #container -->

			<?php 
			//on appelle le fichier footer.php
			get_footer(); ?>
 	