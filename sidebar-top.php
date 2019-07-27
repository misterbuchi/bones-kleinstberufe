
					<?php if ( is_active_sidebar( 'sidebar-top' ) ) : ?>

						<?php dynamic_sidebar( 'sidebar-top' ); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						

					<?php endif; ?>

