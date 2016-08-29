<?php /* custom functions for tribe events */

//add disclaimer at bottom of all events //

add_action('tribe_events_single_event_after_the_meta', 'wlm_events_caveat', 3);
function wlm_events_caveat() {
	$evt_cost = tribe_get_cost();
	if ( ($evt_cost) && ($evt_cost > 0) ) {
		echo do_shortcode('[block id="under-events-with-cost"]');
	} 
}

//show cost on admin page (usually hidden with events tickets plus)
add_filter( 'tribe_events_admin_show_cost_field', '__return_true', 100 );

/*** events shortcode  ***/
// strip out the time from the ESC short code.  
// assumes a comma as date, time separator & that there is no comma in Date format.
function ecs_remove_time( $date ) {
	if ( strpos( $date, ", ") !== FALSE ) {
		$date = substr( $date, 0, strpos( $date, ",") );
	}
	return $date;
}
//add_filter( 'ecs_event_list_details', 'ecs_remove_time' );