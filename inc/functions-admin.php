<?php

function latin_metaboxes() {

	if (isset($_GET['post'])) {
		$post_id = $_GET['post'];
	} else {
		if (isset($_POST['post_ID'])) {
			$post_id = $_POST['post_ID'];
		} else {
			$post_id = '';
		}
	}
	if( !isset( $post_id ) ) return;



	$latin_metaboxes = array(
		array(
			'id' => 'page_options',
			'title' => 'Page options',
			'pages' => 'page',
			'context' => 'normal',
			'priority' => 'low',
			'fields' => array(
				array(
					'name' => 'Subheading',
					'desc' => '',
					'id' => 'latin_h2',
					'type' => 'text',
					'std' => ''
				)
			)
		)
	);

	$template_file = get_post_meta($post_id, '_wp_page_template', true);

	if( $template_file == 'page-home.php' ) {
		foreach ( $latin_metaboxes as $meta_box ) {
			$notification_box = new CreateMetaBox( $meta_box );
		}
	}

}