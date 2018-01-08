<?php

function latin_metaboxes() {
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
	foreach ( $latin_metaboxes as $meta_box ) {
		$notification_box = new CreateMetaBox( $meta_box );
	}
}