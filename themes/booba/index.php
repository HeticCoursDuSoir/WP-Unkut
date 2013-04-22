			<?php 
			//on appelle le fichier header.php
			get_header(); ?>


			<section id="container">

				<div id="quote">
					<?php query_posts(array("orderby" => "rand", "posts_per_page" => 1, "post_type" => "punchline")); 
					if ( have_posts() ) : while ( have_posts() ) : the_post();
					?>
						<p>“ <?php the_title(); ?> ”</p>
					<?php endwhile; else: ?>
						<p> Aucune punchline pour le moment </p>
					<?php endif; wp_reset_query(); ?>
				</div>

				<div id="main-content">
					<ul>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<li>
								<a class="blog-thumb" href="<?php the_permalink(); ?>"><?php the_post_thumbnail("thumbnail"); ?></a>
								<div class="post-info">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<p><?php the_excerpt(); ?></p>
									<a class="more-btn" href="<?php the_permalink(); ?>">Lire la suite</a>
								</div>
								<div class="clear"></div>
							</li>
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
 	