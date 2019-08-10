<?php get_header(); ?>

			<div id="content" class="page">
											<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<div class="Rectangle pale-lilac first"></div>
			<div class="Rectangle dull-red second"></div>	
			
			<ul class="register">
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Startseite</a></li>
				<?php if ( $post->post_parent ) { ?>
				<li><a href="<?php echo get_permalink( $post->post_parent ); ?>"><?php echo get_the_title( $post->post_parent ); ?></a></li>
				<?php } ?>
				
				<li><?php the_title(); ?></li>
				
				
								<?php echo strip_tags(html_entity_decode(wp_nav_menu(array(
								    					'container' => '',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
								    					'container_class' => 'footer-links cf register',         // class of container (should you choose to use it)
								    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
								    					'depth' => 0,                                   // limit the depth of the nav
								    					'items_wrap'     => '%3$s',
								    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
														))), '<a>'); ?>

<!--<?php $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
				                                           // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);
				
				$menuID = $menuLocations['footer-links']; // Get the *primary* menu ID
				
				$primaryNav = wp_get_nav_menu_items($menuID); 
				
				foreach ( $primaryNav as $navItem ) {
				
				  $parent_id = $navItem->meta->_menu_item_menu_item_parent;
				
				if ($parent_id == '0') {echo '<li><a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';
				}
				
				 else {
				    
				}
				}
				 ?>-->
				 
				
				
			</ul>
			
				

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">


							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>


								</header> <?php // end article header ?>

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
								</section> <?php // end article section ?>

						
							</article>


						</main>


				</div>
											<?php endwhile; endif; ?>
																	<?php get_sidebar(); ?>
											
				

			</div>

<?php get_footer(); ?>
