			<?php 
			//on appelle le fichier header.php
			get_header(); ?>

			<section id="container">

				<div id="main-content">
					<div id="post-container">
						<h1><?php the_title(); ?></h1>

						<div id="post-content" class="typo">
							<img src="<?php echo bloginfo('template_url'); ?>/images/404.png" alt="" />
						</div>
						
					</div>
				</div> <!-- #main-content -->
			

				<div id="sidebar">
					<?php dynamic_sidebar('main-sidebar'); ?>
				</div><!-- #sidebar -->
				
				<div class="clear"></div>
			</section><!-- #container -->

			<?php 
			//on appelle le fichier footer.php
			get_footer(); ?>
 	