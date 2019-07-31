			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				
				<div class="column-1">
					<?php  if ( function_exists( 'the_custom_logo' ) ) {
							the_custom_logo();
						} else {
						
					bloginfo('name');} ?>
					
					<ul class="social">
						<li><a href="https://www.instagram.com/kleinstberufe/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Instagram.svg" title="Instagram" alt="Instagram" /></a></li>
						<li><a href="https://www.facebook.com/Kleinstberufe" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Facebook.svg" alt="Facebook" title="Facebook" /></a>
					</ul>
					
				</div>

				<div id="inner-footer" class="wrap cf">

					<?php // WP_Query arguments
					                        wp_reset_query();
					
					$args = array(
						'page_id'                => '53',
					);
					
					// The Query
					$queryfooter = new WP_Query( $args );
					while ($queryfooter->have_posts()) : $queryfooter->the_post(); ?>
					
					<h4><?php the_title(); ?></h4>
					
					<?php the_content(); ?>
					
					<?php
					endwhile;
					wp_reset_query();
					?>
					
					<div id="sponsoren">
						<?php
						                    query_posts( array('cat' => 16, 'posts_per_page' => -1, 'order' => 'ASC') );?>
						                    											<h4><?php single_cat_title(); ?>.</h4>
						                    
						                    
						                    <?php while(have_posts()) : the_post();
						                    ?>
											
						
						                    <div class="sponsoren">
						
						                        <?php the_post_thumbnail('sponsoren') ?>
						
						                    </div>
						
						                    <?php
						                    endwhile;
						                    wp_reset_query();
						                    ?>
						
						
						
						
					</div>
					
					<address>
						<span class="source-org copyright"><p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p></span>
					<?php if ( is_active_sidebar( 'sidebarfooter' ) ) : ?>
					    <?php dynamic_sidebar( 'sidebarfooter' ); ?>
					<?php endif; ?>
					
					</address>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
