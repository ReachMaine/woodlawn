<?php 
/* woocommerce */
	//*** woocommerce stuff.  

/***************************** 
	* things in this function are called after flatsome is setup, if want to use flatsome values OR calls OR
	to overwrite flatsome specific things.  they need to go here, everytning else can just go in the file.
	**********************/
	function reach_woo_setup() {

		/* remove the sorting & results at top of category */
		remove_action( 'flatsome_shop_category_nav_right', 'woocommerce_result_count', 20 );
		remove_action( 'flatsome_shop_category_nav_right', 'woocommerce_catalog_ordering', 30 );

	}


	add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
	function custom_override_checkout_fields( $fields ) {
	    $fields['order']['order_comments']['placeholder'] = 'Notes about your order';
	    $fields['order']['order_comments']['label'] = 'Notes';
	    return $fields;
	} 

	/**
	 * Hides the 'Free!' price notice
	 */
	add_filter( 'woocommerce_variable_free_price_html',  'hide_free_price_notice' );
 	add_filter( 'woocommerce_free_price_html',           'hide_free_price_notice' );
 	add_filter( 'woocommerce_variation_free_price_html', 'hide_free_price_notice' );
	function hide_free_price_notice( $price ) {
	 	return '';
	}


	function woodlawn_after_cart() {
		$html = '<div id="wln-after-cart">';
		$html .= do_shortcode('[block id="bottom-shopping-cart"]');
		$html .= '</div>';
		echo $html;
	}
    add_action ('woocommerce_after_cart','woodlawn_after_cart',30, 0);


/* events tickets plus */

	/*
	 * Adding event title (linked) to WooCommerce checkout for Events Calendar tickets.
	 * shows on cartpage & checkout page.
	 */
	add_filter( 'woocommerce_cart_item_name', 'woocommerce_cart_item_name_event_title', 10, 3 );
	function woocommerce_cart_item_name_event_title( $title, $values, $cart_item_key ) {
		$eventobj = tribe_events_get_ticket_event( $values['product_id'] );
		if ( $eventobj !== false ) {
			$event_title = $eventobj->post_title;
			if ($title != $event_title) {
				$title = sprintf( '%s for <a href="%s" target="_blank"><strong>%s</strong></a>', $title, get_permalink($eventobj->ID), $event_title );
			}
		}
		return $title;
	}

	// use event image in cart instead of placeholder image (i.e. there isnt a product image)
	add_filter( 'woocommerce_cart_item_thumbnail', 'reach_cart_image_event', 10, 3);
	function reach_cart_image_event($product_image, $cart_item, $cart_itemkey) {
		if (strpos($product_image, "placeholder")) {
			$eventobj = tribe_events_get_ticket_event( $cart_item['product_id'] );
			if ( $eventobj !== false ) {
				$event_image = get_the_post_thumbnail($eventobj->ID, "shop_thumbnail");
				if ($event_image) {
					$product_image = $event_image;
				}
			}
		
		}
		return $product_image;
	}

	// show event title & date on admin orders screen.
	function zig_show_event_item_info( $name, $item, $false ) {
		$event_title = "";
		$eventobj = tribe_events_get_ticket_event( $item['product_id'] );
		if ( $eventobj !== false ) {
			//$event_title .= " [".$eventobj->ID."] "; // for debugging
			$etitle = $eventobj->post_title;
			if ($etitle != $name) {
				$event_title .= ' - '.$etitle;
			}
	        $event_title .= ' ('.tribe_get_start_date( $eventobj ).')';
	    }
		return $name . $event_title;
	}
	add_filter( 'woocommerce_order_item_name', 'zig_show_event_item_info', 10, 3 );


	// show the event title & date on admin edit screen.
	add_action ('woocommerce_after_order_itemmeta', 'zig_admin_item_info', 10, 3);
	function zig_admin_item_info ($item_id, $item, $_product ) {
		$out_html = zig_show_event_item_info("", $item, false);
		echo $out_html;
	}

	/*  Tickets change "You’ll receive your tickets in another email." text */
	add_filter('wootickets_email_message', 'woo_tickets_filter_completed_order', 10 );
	function woo_tickets_filter_completed_order($text) {

		$text = "This confirmation serves as your ticket to this event.";
	 
		return $text;
	}