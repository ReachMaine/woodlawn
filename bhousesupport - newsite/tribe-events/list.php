<?php
/**
 * List View Template
 * The wrapper template for a list of events. This includes the Past Events and Upcoming Events views
 * as well as those same views filtered to a specific category.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list.php
 *
 * @package TribeEventsCalendar
 *
 */
/* 
 * zig:  add sidebar column 3 (flatsome) add calendar in column9 
 */
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

do_action( 'tribe_events_before_template' );
?>

<?php /* add column for content, i.e. calendar */
	echo '<div class="large-9 right columns">';
?>
		<!-- Tribe Bar -->
	<?php tribe_get_template_part( 'modules/bar' ); ?>

		<!-- Main Events Content -->
	<?php tribe_get_template_part( 'list/content' ); ?>

	<div class="tribe-clear"></div>
<?php 
	echo '</div>'; /* zig end of column 9 */
	
	echo '<div class="large-3 columns left">' ;/*zig add  col 3 for sidebar */
	get_sidebar();
	echo '</div>';

?>
<?php

do_action( 'tribe_events_after_template' );

