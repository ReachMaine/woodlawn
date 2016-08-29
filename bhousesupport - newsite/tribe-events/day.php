<?php
/**
 * Day View Template
 * The wrapper template for day view.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/day.php
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
<?php /* zig add column for content, i.e. calendar */
	echo '<div class="large-9 right columns">';
?>
<!-- Tribe Bar -->
<?php tribe_get_template_part( 'modules/bar' ); ?>

<!-- Main Events Content -->
<?php tribe_get_template_part( 'day/content' ) ?>

<div class="tribe-clear"></div>
<?php 
	echo '</div>'; /* zig end of column 9 */
	
	echo '<div class="large-3 columns left">' ;/*zig add  col 3 for sidebar */
	get_sidebar();
	echo '</div>';

?>
<?php
do_action( 'tribe_events_after_template' );
