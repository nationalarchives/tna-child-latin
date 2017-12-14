<?php
/**
 * Shortcode
 */

function latin_activity_shortcode( $atts ) {

	$a = shortcode_atts( array(
		'beginner-activity' => '',
		'advanced-activity' => ''
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
		case 'p8':
			return activity_p8();
			break;
		case '8':
			return activity_8();
			break;
		case 'p9':
			return activity_p9();
			break;
		case '9':
			return activity_9();
			break;
		case 'p10':
			return activity_p10();
			break;
		case '10':
			return activity_10();
			break;
		case 'p11':
			return activity_p11();
			break;
		case '11':
			return activity_11();
			break;
		case 'p12':
			return activity_p12();
			break;
		case '12':
			return activity_12();
			break;
	}

	switch ( $a['advanced-activity'] ) {
		case '1':
			return advanced_activity_1();
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
	echo iframe_activity( '128%', '/beginner-activities/activity03.html' );
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
	echo iframe_activity( '128%', '/beginner-activities/activity06.html' );
}

function activity_p7() {
	echo embed_code( 'four-three', 'p07', 'beginner-activities', 'practice07.swf' );
}

function activity_7() {
	echo embed_code( 'four-three', '07', 'beginner-activities', 'activity07.swf' );
}

function activity_p8() {
	echo embed_code( 'four-three', 'p08', 'beginner-activities', 'practice08.swf' );
}

function activity_8() {
	echo embed_code( 'two-one', '08', 'beginner-activities', 'activity08.swf' );
}

function activity_p9() {
	echo embed_code( 'four-three', 'p09', 'beginner-activities', 'practice09.swf' );
}

function activity_9() {
	echo embed_code( 'four-three', '09', 'beginner-activities', 'activity09.swf' );
}

function activity_p10() {
	echo embed_code( 'four-three', 'p10', 'beginner-activities', 'practice10.swf' );
}

function activity_10() {
	echo embed_code( 'two-one', '10', 'beginner-activities', 'activity10.swf' );
}

function activity_p11() {
	echo embed_code( 'four-three', 'p11', 'beginner-activities', 'practice11.swf' );
}

function activity_11() {
	echo embed_code( 'four-three', '11', 'beginner-activities', 'activity11.swf' );
}

function activity_p12() {
	echo embed_code( 'four-three', 'p12', 'beginner-activities', 'practice12.swf' );
}

function activity_12() {
	echo embed_code( 'one-one', '12', 'beginner-activities', 'activity12.swf' );
}

function advanced_activity_1() {
	echo iframe_activity( '90%', '/advanced-activities/activity01.html' );
}

function embed_code( $class, $id, $folder, $file ) {
	$dir = get_stylesheet_directory_uri().'/'.$folder;
	$html = '<div class="activity-container">
				<div class="activity %s">
					<object id="activity-%s">
						<param name="src" value="%s/%s">
						<param name="menu" value="false">
						<param name="wmode" value="transparent">
						<PARAM NAME="SCALE" VALUE="exactfit">
						<embed src="%s/%s" SCALE="exactfit" menu="false" wmode="transparent" name="activity-%s">
					</object>
				</div>
			</div>';

	return sprintf( $html, $class, $id, $dir, $file, $dir, $file, $id );
}

function iframe_activity( $ratio, $activity ) {
	$file = get_stylesheet_directory_uri().$activity;
	$html = '<div class="activity-container">
				<div class="iframe" style="padding-bottom:%s">
					<iframe src="%s" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>';

	return sprintf( $html, $ratio, $file );
}