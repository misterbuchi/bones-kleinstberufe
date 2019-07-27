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

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
