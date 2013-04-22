			<?php 
			//on appelle le fichier header.php
			get_header(); ?>


			<section id="container">

				<div id="quote">
					<p>“ Si t’es criblé de douilles c’est que tu chantes comme un poulet ”</p>
				</div>

				<div id="main-content">
					<ul id="punchline">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li>"<?php the_title(); ?>"</li>
						<?php endwhile; else: ?>
							<p>Aucun article pour le moment</p>
						<?php endif; ?>
						
					</ul>
				</div> <!-- #main-content -->
			

				<div id="sidebar">
					<?php dynamic_sidebar('main-sidebar'); ?>
				</div><!-- #sidebar -->
				<div class="clear"></div>
			</section><!-- #container -->

			<?php 
			//on appelle le fichier footer.php
			get_footer(); ?>
 	