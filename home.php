<?php
/*
 Template Name: Home
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							
							<div class="swiper-container">
							
							    <div class="swiper-wrapper">
							
							        <?php
							        query_posts( array('category_name' => 'slider', 'posts_per_page' => 7, 'order' => 'ASC', 'orderby' => 'rand' ) );
							        while(have_posts()) : the_post();
							        ?>
							
							        <div class="swiper-slide">
							
							            <?php the_post_thumbnail('slider-home') ?>
							
							        </div>
							
							        <?php
							        endwhile;
							        wp_reset_query();
							        ?>
							
							    </div>
							
							    <div class="swiper-pagination"></div>
							
							</div>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf RectangleHome' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title"><?php the_title(); ?></h1>

								

								</header>

								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section>


								<footer class="article-footer">


								</footer>


							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page-custom.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; 
							
														                    wp_reset_query();
							?>

						</main>
						
						<section id="one" class="m-all t-all d-all">
							
							<?php
							                    query_posts( array('cat' => 1, 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'ASC') );
							                    ?>
												
							
							                   <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							                   							
							                   															<header class="article-header">
							                   
							                   							<?php
							                   							the_archive_title( '<h1 class="page-title">', '</h1>' );?>
							                   							
							                   							</header> <?php // end article header ?>
							                   							
							                   															<section class="entry-content cf" itemprop="articleBody">
							                   							
							                   							<?php the_archive_description( '<div class="taxonomy-description">', '</div>' );
							                   							?>
							                   							
											   							<?php 							                    while(have_posts()) : the_post();
											   							 ?>
							                   						
							                   
							                   							<news id="post-<?php the_ID(); ?>" <?php post_class( 'cf d-1of3 t-1of2 m-all newsbox' ); ?> role="article">
							                   	
							                   								
							                   
							                   								<header class="entry-header news-header">
							                   
							                   									<h3 class="h2 news-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							                   									
							                   
							                   								</header>
							                   
							                   								<section class="news-content cf">
							                   
							                   
							                   									<?php the_excerpt(); ?>
							                   
							                   								</section>
							                   
							                   								<footer class="news-footer">
							                   
							                   								</footer>
							                   
							                   							</news>
											   							   
							                   
							                   
							                   
							                   							<?php
							                   							                    endwhile;?>
											   												
											   												<?php   $category_link = get_category_link( 1 );?>
											   													
											   													<a class="button" href="<?php echo esc_url( $category_link ); ?>" title="Category Name">Mehr</a>
											   													
							                   							                    <?php wp_reset_query();
							                   							                    ?>
							                   							
							                   							
							                   							</section> <?php // end article section ?>
							                   							
							                   													
							                   														</article>							                    
						</section>
						<section id="two" class="m-all t-all d-all"></section>
						<section id="three" class="m-all t-all d-all"></section>
						
						
						

						<?php get_sidebar(); ?>

				</div>

			</div>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>
<?php get_footer(); ?>
