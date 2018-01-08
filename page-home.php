<?php
/*
 * Template Name: Latin home
 *
 */
get_header(); ?>

<?php get_template_part( 'breadcrumb' ); ?>

<div id="primary" class="content-area latin-home level-one">
	<div class="container">
        <div class="row" role="banner">
            <div class="col-md-12">
				<?php
				global $post;
				$image      = make_path_relative_no_pre_path( get_feature_image_url( $post->ID, 'full-page-width', true ) );
				$title      = get_the_title();
				get_page_banner( 'level one', $title, $image, '', '', '' );
				?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <article>
                    <div class="entry-header">
                        <h2><?php
	                        echo get_post_meta($post -> ID, 'latin_h2', true);
	                        ?></h2>
                    </div>
                    <div class="row entry-content">
                        <div class="col-xs-12 col-sm-8 col-md-8">
                            <?php
                            while ( have_posts() ) : the_post();
	                           the_content();

                            endwhile;
                            ?>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="row equal-heights" id="equal-heights">
			<?php
			$i     = 1;
			$n     = 1;
			$boxes = array();
			$id    = is_front_page() ? 0 : $post->ID;
			$pages = get_pages( array(
				'sort_order'  => 'asc',
				'sort_column' => 'menu_order',
				'exclude'     => array( $post->ID ),
				'child_of'    => $id,
				'parent'      => $id,
			) );
			foreach ( $pages as $page ) {
				$redirect               = get_post_meta( $page->ID, 'redirectUrl', true );
				$boxes[ $i ]['title']   = $page->post_title;
				$boxes[ $i ]['url']     = ( $redirect ) ? $redirect : make_path_relative( get_page_link( $page->ID ) );
				$boxes[ $i ]['image']   = make_path_relative_no_pre_path( get_feature_image_url( $page->ID, 'landing-page-children-thumb' ) );
				$boxes[ $i ]['excerpt'] = ( $page->post_excerpt ) ? $page->post_excerpt : first_sentence( $page->post_content );
				$child_pages            = get_pages( array(
					'sort_order'  => 'asc',
					'sort_column' => 'menu_order',
					'child_of'    => $page->ID,
					'parent'      => $page->ID
				) );
				if ( $child_pages ) {
					foreach ( $child_pages as $child_page ) {
						$redirect                                  = get_post_meta( $child_page->ID, 'redirectUrl', true );
						$boxes[ $i ]['child_pages'][ $n ]['title'] = $child_page->post_title;
						$boxes[ $i ]['child_pages'][ $n ]['url']   = ( $redirect ) ? $redirect : make_path_relative( get_page_link( $child_page->ID ) );
						$n ++;
					}
				}
				$i ++;
			}
			get_lessons( $boxes );
			?>
        </div>
        <!--<div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <article>
                    <div class="entry-header">
                        <h2 id="stage-1">
                            Stage 1
                        </h2>
                    </div>
                    <div class="entry-content clearfix">
                        Stage 1 Bullets
                    </div>
                </article>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <article>
                    <div class="entry-header">
                        <h2 id="stage-2">
                            Stage 2
                        </h2>
                    </div>
                    <div class="entry-content clearfix">
                        Stage 2 bullets
                    </div>
                </article>
            </div>

        </div>-->
	</div>
</div>

<?php get_footer(); ?>
