<?php
/**
 * Month View Template
 * The wrapper template for month view.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month.php
 *
 * @package TribeEventsCalendar
 *
 */
/* 
 * zig:  add sidebar column 3 (flatsome) left add calendar in column9 right
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

do_action( 'tribe_events_before_template' );

	/* add column for content, i.e. calendar */
	echo '<div class="large-9 right columns">';

		// Tribe Bar
		tribe_get_template_part( 'modules/bar' );

		// Main Events Content
		tribe_get_template_part( 'month/content' );
	echo '</div>'; /* zig end of column 9 */
	
	echo '<div class="large-3 columns left">' ;/*zig add  col 3 for sidebar */
		get_sidebar();
	echo '</div>';


do_action( 'tribe_events_after_template' );