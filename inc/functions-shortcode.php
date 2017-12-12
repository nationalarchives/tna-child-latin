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
	<div class="activity">
		<object id="activity01">
			<param name="src" value="<?php echo get_stylesheet_directory_uri() ?>/activities/activity01.swf">
			<param name="menu" value="false">
			<param name="wmode" value="transparent">
			<PARAM NAME="SCALE" VALUE="exactfit">
			<embed src="<?php echo get_stylesheet_directory_uri() ?>/activities/activity01.swf" SCALE="exactfit" menu="false" wmode="transparent" name="activity01">
		</object>
	</div>
<?php
}

function activity_2() {
	?>
	<div class="activity">
		<object id="activity02">
			<param name="src" value="<?php echo get_stylesheet_directory_uri() ?>/activities/activity02.swf">
			<param name="menu" value="false">
			<param name="wmode" value="transparent">
			<PARAM NAME="SCALE" VALUE="exactfit">
			<embed src="<?php echo get_stylesheet_directory_uri() ?>/activities/activity02.swf" SCALE="exactfit" menu="false" wmode="transparent" name="activity02">
		</object>
	</div>
	<?php
}