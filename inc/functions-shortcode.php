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
			return embed_code( 'four-three', '01', 'beginner-activities', 'activity01.swf' );
			break;
		case 'p2':
			return embed_code( 'four-three', 'p02', 'beginner-activities', 'practice02.swf' );
			break;
		case '2':
			return embed_code( 'four-three', '02', 'beginner-activities', 'activity02.swf' );
			break;
		case 'p3':
			return embed_code( 'four-three', 'p03', 'beginner-activities', 'practice03.swf' );
			break;
		case '3':
			return iframe_activity( '125%', '/beginner-activities/activity03.html' );
			break;
		case 'p4':
			return embed_code( 'four-three', 'p04', 'beginner-activities', 'practice04.swf' );
			break;
		case '4':
			return embed_code( 'four-three', '04', 'beginner-activities', 'activity04.swf' );
			break;
		case 'p5':
			return embed_code( 'four-three', 'p05', 'beginner-activities', 'practice05.swf' );
			break;
		case '5':
			return embed_code( 'two-one', '05', 'beginner-activities', 'activity05.swf' );
			break;
		case 'p6':
			return embed_code( 'four-three', 'p06', 'beginner-activities', 'practice06.swf' );
			break;
		case '6':
			return iframe_activity( '125%', '/beginner-activities/activity06.html' );
			break;
		case 'p7':
			return embed_code( 'four-three', 'p07', 'beginner-activities', 'practice07.swf' );
			break;
		case '7':
			return embed_code( 'four-three', '07', 'beginner-activities', 'activity07.swf' );
			break;
		case 'p8':
			return embed_code( 'four-three', 'p08', 'beginner-activities', 'practice08.swf' );
			break;
		case '8':
			return embed_code( 'two-one', '08', 'beginner-activities', 'activity08.swf' );
			break;
		case 'p9':
			return embed_code( 'four-three', 'p09', 'beginner-activities', 'practice09.swf' );
			break;
		case '9':
			return embed_code( 'four-three', '09', 'beginner-activities', 'activity09.swf' );
			break;
		case 'p10':
			return embed_code( 'four-three', 'p10', 'beginner-activities', 'practice10.swf' );
			break;
		case '10':
			return embed_code( 'two-one', '10', 'beginner-activities', 'activity10.swf' );
			break;
		case 'p11':
			return embed_code( 'four-three', 'p11', 'beginner-activities', 'practice11.swf' );
			break;
		case '11':
			return embed_code( 'four-three', '11', 'beginner-activities', 'activity11.swf' );
			break;
		case 'p12':
			return embed_code( 'four-three', 'p12', 'beginner-activities', 'practice12.swf' );
			break;
		case '12':
			return embed_code( 'one-one', '12', 'beginner-activities', 'activity12.swf' );
			break;
	}

	switch ( $a['advanced-activity'] ) {
		case '5':
			return advanced_activity( 'Pronouns', activity_05() );
			break;
		case 'p1':
			return advanced_practice( 1, 'Imperfect tense', practice_01() );
			break;
		case 'p2':
			return advanced_practice( 2, 'Pluperfect tense', practice_02() );
			break;
		case 'p3':
			return advanced_practice( 3, 'Future simple', practice_03() );
			break;
		case 'p4':
			return advanced_practice( 4, 'Future perfect tense', practice_04() );
			break;
		case 'p5':
			return advanced_practice( 5, 'Pronouns', practice_05() );
			break;
		case 'p6':
			return advanced_practice( 6, 'Passive verbs', practice_06() );
			break;
		case 'p7':
			return advanced_practice( 7, 'Participles', practice_07() );
			break;
		case 'p8':
			return advanced_practice( 8, 'Comparison of adjectives and adverbs', practice_08() );
			break;
		case 'p9':
			return advanced_practice( 9, 'Subjunctive', practice_09() );
			break;
	}

	if ( $a['advanced-activity'] ) {
		$lesson = sprintf("%02d", $a['advanced-activity']);
		return iframe_activity( '90%', '/advanced-activities/activity'.$lesson.'.html' );
	}
}
add_shortcode( 'latin', 'latin_activity_shortcode' );

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