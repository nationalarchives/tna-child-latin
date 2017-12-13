<?php
/**
 * Shortcode
 */

function latin_activity_shortcode( $atts ) {

	$a = shortcode_atts( array(
		'beginner-activity' => '1'
	), $atts );

	switch ( $a['beginner-activity'] ) {
		case '1':
			return activity_1();
			break;
		case 'p2':
			return activity_p2();
			break;
		case '2':
			return activity_2();
			break;
		case 'p3':
			return activity_p3();
			break;
		case '3':
			return activity_3();
			break;
		case 'p4':
			return activity_p4();
			break;
		case '4':
			return activity_4();
			break;
		case 'p5':
			return activity_p5();
			break;
		case '5':
			return activity_5();
			break;
		case 'p6':
			return activity_p6();
			break;
		case '6':
			return activity_6();
			break;
		case 'p7':
			return activity_p7();
			break;
		case '7':
			return activity_7();
			break;
	}
}
add_shortcode( 'latin', 'latin_activity_shortcode' );

function activity_1() {
	echo embed_code( 'four-three', '01', 'beginner-activities', 'activity01.swf' );
}

function activity_p2() {
	echo embed_code( 'four-three', 'p02', 'beginner-activities', 'practice02.swf' );
}

function activity_2() {
	echo embed_code( 'four-three', '02', 'beginner-activities', 'activity02.swf' );
}

function activity_p3() {
	echo embed_code( 'four-three', 'p03', 'beginner-activities', 'practice03.swf' );
}

function activity_3() {
	echo embed_code( 'three-four', '03', 'beginner-activities', 'activity03.swf' );
}

function activity_p4() {
	echo embed_code( 'four-three', 'p04', 'beginner-activities', 'practice04.swf' );
}

function activity_4() {
	echo embed_code( 'four-three', '04', 'beginner-activities', 'activity04.swf' );
}

function activity_p5() {
	echo embed_code( 'four-three', 'p05', 'beginner-activities', 'practice05.swf' );
}

function activity_5() {
	echo embed_code( 'two-one', '05', 'beginner-activities', 'activity05.swf' );
}

function activity_p6() {
	echo embed_code( 'four-three', 'p06', 'beginner-activities', 'practice06.swf' );
}

function activity_6() {
	echo embed_code( 'three-four', '06', 'beginner-activities', 'activity06.swf' );
}

function activity_p7() {
	echo embed_code( 'four-three', 'p07', 'beginner-activities', 'practice07.swf' );
}

function activity_7() {
	echo embed_code( 'four-three', '07', 'beginner-activities', 'activity07.swf' );
}

function embed_code( $class, $id, $folder, $file ) {
	$dir = get_stylesheet_directory_uri().'/'.$folder;
	$html = '<div class="activity %s">
				<object id="activity-%s">
					<param name="src" value="%s/%s">
					<param name="menu" value="false">
					<param name="wmode" value="transparent">
					<PARAM NAME="SCALE" VALUE="exactfit">
					<embed src="%s/%s" SCALE="exactfit" menu="false" wmode="transparent" name="activity-%s">
				</object>
			</div>';

	return sprintf( $html, $class, $id, $dir, $file, $dir, $file, $id );
}