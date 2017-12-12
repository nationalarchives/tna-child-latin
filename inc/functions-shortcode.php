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
		case '2':
			return activity_2();
			break;
	}
}
add_shortcode( 'latin', 'latin_activity_shortcode' );

function activity_1() {
	?>
	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="100%" height="100%" id="theMovie">
		<param name="src" value="<?php echo get_stylesheet_directory_uri() ?>/activities/activity01.swf">
		<param name="menu" value="false">
		<param name="wmode" value="transparent">
		<PARAM NAME="SCALE" VALUE="exactfit">
		<embed src="<?php echo get_stylesheet_directory_uri() ?>/activities/activity01.swf" SCALE="exactfit" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="100%" height="100%" menu="false" wmode="transparent" name="theMovie">
	</object>
<?php
}

function activity_2() {
	?>
	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="525" height="415" id="theMovie">
		<param name="src" value="<?php echo get_stylesheet_directory_uri() ?>/activities/activity02.swf">
		<param name="menu" value="false">
		<param name="wmode" value="transparent">
		<embed src="<?php echo get_stylesheet_directory_uri() ?>/activities/activity02.swf" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="525" height="415" menu="false" wmode="transparent" name="theMovie">
	</object>
	<?php
}