<?php get_header(); ?>

			<div id="content" class="page">
				
				
				<div class="Rectangle pale-lilac first"></div>
				<div class="Rectangle dull-red second"></div>
				<div class="Rectangle soft-blue third"></div>
				

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-all d-all cf newscontainer" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<div id="post-<?php the_ID(); ?>" <?php post_class( 'cf d-1of3 t-1of2 m-all newsbox' ); ?> role="article">
								
								<?php 
								if ( has_post_thumbnail() ) {
								    the_post_thumbnail('home-small');
								}
								else {
								    the_custom_logo('home-small');
								}
								
								 ?>
								

								<header class="entry-header article-header">

									<h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<p class="byline entry-meta vcard">
										<?php printf('<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>'                    							); ?>
									</p>

								</header>

								<section class="entry-content cf">


									<?php the_excerpt(); ?>

								</section>

								<footer class="article-footer">

								</footer>

							</div>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
