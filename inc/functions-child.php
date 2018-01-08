<?php

// Enqueue styles in correct order
function tna_child_styles()
{
	wp_register_style('tna-parent-styles', get_template_directory_uri() . '/css/base-sass.css.min', array(),
		EDD_VERSION, 'all');
	wp_register_style('tna-child-styles', get_stylesheet_directory_uri() . '/css/latin-sass.css.min', array(), '0.1', 'all');
	wp_enqueue_style('tna-parent-styles');
	wp_enqueue_style('tna-child-styles');
}

// Dequeue parent styles for re-enqueuing in the correct order
function dequeue_parent_style()
{
	wp_dequeue_style('tna-styles');
	wp_deregister_style('tna-styles');
}

function get_lessons( $boxes ) {
	foreach ( $boxes as $box ) { ?>
		<div class="col-xs-12 col-sm-6">
			<article>
				<div class="entry-header">
					<h2>
						<a href="<?php echo $box['url']; ?>" title="<?php echo $box['title'] ?>">
							<?php echo $box['title']; ?>
						</a>
					</h2>
				</div>
				<div class="entry-content">
					<?php if ( $box['image'] ) { ?>
						<a href="<?php echo $box['url']; ?>" class="thumbnail" title="<?php echo $box['title'] ?>">
							<img src="<?php echo $box['image']; ?>" class="img-responsive" alt="<?php echo $box['title'] ?>">
						</a>
					<?php } ?>
					<p><?php echo $box['excerpt']; ?></p>
					<?php if ( isset($box['child_pages']) ) { ?>
						<ul >
							<?php foreach ( $box['child_pages'] as $child_page ) { ?>
								<li>
									<a href="<?php echo $child_page['url']; ?>" title="<?php echo $child_page['title'] ?>">
										<?php echo $child_page['title']; ?>
									</a>
								</li>
								<?php
							} ?>
						</ul>
					<?php } ?>
				</div>
			</article>
		</div>
	<?php }
}