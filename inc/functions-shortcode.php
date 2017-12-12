<?php
/**
 * Shortcode
 */

function latin_activity_shortcode( $atts ) {

	$a = shortcode_atts( array(
		'activity' => '1'
	), $atts );

	switch ( $a['activity'] ) {
		case '1':
			return activity_1();
			break;
		case 'p2':
			return activity_p2();
			break;
		case '2':
			return activity_2();
			break;
	}
}
add_shortcode( 'latin', 'latin_activity_shortcode' );

function activity_1() {
	echo embed_code( '01', 'activity01.swf' );
}

function activity_p2() {
	echo embed_code( 'p02', 'practice02.swf' );
}

function activity_2() {
	echo embed_code( '02', 'activity02.swf' );
}

function embed_code( $id, $file ) {
	$dir = get_stylesheet_directory_uri();
	$html = '<div class="activity">
				<object id="activity%s">
					<param name="src" value="%s/activities/%s">
					<param name="menu" value="false">
					<param name="wmode" value="transparent">
					<PARAM NAME="SCALE" VALUE="exactfit">
					<embed src="%s/activities/%s" SCALE="exactfit" menu="false" wmode="transparent" name="activity%s">
				</object>
			</div>';

	return sprintf( $html, $id, $dir, $file, $dir, $file, $id );
}