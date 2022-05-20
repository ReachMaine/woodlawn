<?php
	require_once(get_stylesheet_directory().'/custom/language.php'); 
	require_once(get_stylesheet_directory().'/custom/flat.php'); 
	require_once(get_stylesheet_directory().'/custom/woocommerce.php'); 
	require_once(get_stylesheet_directory().'/custom/tribe-events.php');

	add_filter('widget_text', 'do_shortcode'); // make text widget do shortcodes....
	add_action('after_setup_theme', 'ea_setup');
	add_action('after_setup_theme', 'reach_woo_setup');
	/**  ea_setup
	*  init stuff that we have to init after the main theme is setup.
	* 
	*/
	function ea_setup() {
	 /* do stuff ehre. */
	 	add_action('login_head', 'add_favicon');
		add_action('admin_head', 'add_favicon');
	
	}
	// trying to fix the "double lightbox problem"
	// first dequeue flatsome js, the enqueue ours that has the magnific popup script commented out.
	add_action('wp_enqueue_scripts', 'remove_flatsome_script', 100);
	function remove_flatsome_script() {
		//wp_dequeue_script( 'flatsome-plugins-js');  // dequeue flatsome's script
	}
	add_action('init', 'reach_load_scripts');
	function reach_load_scripts() {
		//wp_register_script('reachflat-plugins-js', bloginfo('template_url').'/js/myScript.js'__FILE__), false, '1.0', true );
		//wp_enqueue_script( 'reachflat-plugins-js', get_stylesheet_directory_uri().'/js/flatsome-plugins.js', array( 'jquery' ), $version, true );

	}
	function add_favicon() {
	  	$favicon_url = get_stylesheet_directory_uri() . '/images/admin-favicon.ico';
		echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
	} 
	add_action( 'login_footer', 'reach_login_branding' );
	function reach_login_branding() {
		$outstring = "";
		$outstring .= '<p style="text-align:center;">';
		//$outstring .=	'Designed by';
		//$outstring .= 	'<a class="reach-logo" href="https://www.reachmaine.com" target="_blank">';
		$outstring .= 	'<img src="'.get_stylesheet_directory_uri().'/images/reach-favicon.png'.'">';
		$outstring .= 		'R<i style="color: #f58220">EA</i>CH Maine';
		//$outstring .= 	'</a>';
		$outstring .= '</p>';
		echo $outstring;
	}



		/*****  change the login screen logo ****/
	function my_login_logo() { ?>
		<style type="text/css">
			body.login div#login h1 a {
				background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/admin-login.png);
				padding-bottom: 30px;
				background-size: contain;
				margin-left: 0px;
				margin-bottom: 0px;
				margin-right: 0px;
				height: 60px;
				width: 100%;
			}
		</style>
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo' );


	/* tribe events stuff */
	// remove ical & gcal buttons.
	add_action('tribe_events_single_event_before_the_content', 'tribe_remove_single_event_links');
	function tribe_remove_single_event_links () {
	 	remove_action( 'tribe_events_single_event_after_the_content', array( 'Tribe__Events__iCal', 'single_event_links' ) );
	}

	// allow text in price field 
	/* add_filter( 'tribe_get_cost', 'cost_show_full_meta_field', 10, 2 );
	function cost_show_full_meta_field( $cost, $post_id ) {
	    $full_cost = tribe_get_event_meta( $post_id, '_EventCost', false );
	          
	    if ( isset( $full_cost[0] ) ) {
	        return sanitize_text_field( $full_cost[0] );
	    }
	  
	    return $cost;
	} */

	// Hides the iCal/Export Listed Events link from tribe archive views such as List and Month
	remove_filter('tribe_events_after_footer', array('Tribe__Events__iCal', 'maybe_add_link'), 10, 1);
?>
