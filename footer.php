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
					
					

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
