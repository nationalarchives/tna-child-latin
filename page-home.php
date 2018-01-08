<?php
/*
 * Template Name: Latin home
 *
 */
get_header(); ?>

<?php get_template_part( 'breadcrumb' ); ?>

<div id="primary" class="content-area latin-home">
	<div class="container">
		<div class="row">
			<main id="main" class="col-xs-12 col-sm-8" role="main">
				<?php
				while ( have_posts() ) : the_post();
					get_template_part( 'content' );
				endwhile;
				?>
			</main>
		</div>
	</div>
</div>

<?php get_footer(); ?>
