<?php get_header(); ?>
<script> window.location.hash = '#main-header';</script>

			<div id="content" class="page">
				
				
<div class="Rectangle pale-lilac first"></div>
<div class="Rectangle dull-red second"></div>
<div class="Rectangle soft-blue third"></div>
<div class="Rectangle grey-teal thourth"></div>
<div class="Rectangle sick-green five"></div>
<div class="Rectangle yellowish six"></div>
<div class="Rectangle soft-purple seven"></div>
<div class="Rectangle deep-lilac aight"></div>
<div class="Rectangle greyish-brown-two nine"></div>
<ul class="register">
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo __('[:de]Startseite[:fr]Accueil[:]'); ?></a></li>
								
								
								
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

						<main id="main" class="m-all t-all d-all cf newscontainer" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							
															<header class="article-header">

							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );?>
							
							</header> <?php // end article header ?>
							
															<section class="entry-content cf" itemprop="articleBody">
							
							<?php the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<news id="post-<?php the_ID(); ?>" <?php post_class( 'cf d-1of3 t-1of2 m-all newsbox' ); ?> role="article">
								
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php 
								if ( has_post_thumbnail() ) {
								    the_post_thumbnail('home-small');
								}
								else { ?>
								    <a href="<?php echo home_url(); ?>" rel="nofollow"><img class="custom-logo" src="<?php  echo get_stylesheet_directory_uri(); ?>/img/<?php echo __('[:de]Logo_de.svg[:fr]Logo_fr.svg[:]'); ?>"></a>
								<?php }
								
								 ?></a>
								

								<header class="entry-header news-header">

									<h3 class="h2 news-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<p class="byline news-meta vcard">
										<?php $display_date = date('d.m.Y', strtotime(get_post_meta($post->ID, 'event_begin', true)));
										printf('<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' ); 
										if ( $display_date == '01.01.1970') { the_time('d.m.Y'); } else { echo $display_date;  } ;  
										   printf('</time>');
										   ?>
									</p>

								</header>

								<section class="news-content cf">


									<?php the_excerpt(); ?>

								</section>

								<footer class="news-footer">

								</footer>

							</news>

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
							
							</section> <?php // end article section ?>
							
													
														</article>

						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
