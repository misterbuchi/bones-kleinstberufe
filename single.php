<?php get_header(); ?>

			<div id="content" class="page">
										<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
				<div class="Rectangle pale-lilac first"></div>
				<div class="Rectangle dull-red second"></div>	
				
				<ul class="register">
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Startseite</a></li>
								
								
								
												<?php wp_nav_menu(array(
												    					'container' => '',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
												    					'container_class' => 'footer-links cf register',         // class of container (should you choose to use it)
												    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
												    					'depth' => 0,                                   // limit the depth of the nav
												    					'items_wrap'     => '%3$s',
												    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
																		)); ?>
				
							</ul>
				

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">


							<?php
								/*
								 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
								 *
								 * So this function will bring in the needed template file depending on what the post
								 * format is. The different post formats are located in the post-formats folder.
								 *
								 *
								 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
								 * A SPECIFIC POST FORMAT.
								 *
								 * If you want to remove post formats, just delete the post-formats folder and
								 * replace the function below with the contents of the "format.php" file.
								*/
								get_template_part( 'post-formats/format', get_post_format() );
							?>

						

					</main>


				</div>
				<?php endwhile; ?>
				
										<?php else : ?>
				
											<article id="post-not-found" class="hentry cf">
													<header class="article-header">
														<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
													</header>
													<section class="entry-content">
														<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
													</section>
													<footer class="article-footer">
															<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
													</footer>
											</article>
				
										<?php endif; ?>
															<?php get_sidebar(); ?>
										

			</div>

<?php get_footer(); ?>
