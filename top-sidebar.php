
					<?php if ( is_active_sidebar( 'top-sidebar' ) ) : ?>

						<?php dynamic_sidebar( 'top-sidebar' ); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						

					<?php endif; ?>

