<?php
/*
 Template Name: Mitglieder
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
								
								<?php 
								
								
								    $sub_cats = get_categories('parent=3');
								    if( $sub_cats ) :
								        foreach( $sub_cats as $sub_cat ) :
								            $sub_query = new WP_Query( array(
								                'category__in' => array( $sub_cat->term_id ),
								                'posts_per_page' => -1)
								            );
								            if ( $sub_query->have_posts() ) :
								                while( $sub_query->have_posts() ) : $sub_query->the_post();
								                    the_content();								                endwhile;
								            endif;
								        endforeach;
								    endif;
								?>					
							</article>


						</main>


				</div>
											<?php endwhile; endif; ?>
																	<?php get_sidebar(); ?>
											
				

			</div>

<?php get_footer(); ?>
