<?php
/*
Plugin Name: BP Email to WP Email From Bridge
Plugin URI: https://github.com/thebrandonallen/bp-email-wp-mail-from-bridge/
Description: Translates your existing `wp_mail_from` and `wp_mail_from_name` filters to be compatible with the new BP Emails.
Author: Brandon Allen
Version: 1.0
Author URI: https://github.com/thebrandonallen/
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Sets the BP Email from properties based on existing filters on `wp_mail_from`
 * and `wp_mail_from_name`.
 *
 * @since 1.0.0
 *
 * @param string   $email_type The BP Email type.
 * @param BP_Email $email_obj  The BP Email object.
 *
 * @return void
 */
function tba_bp_email_to_wp_mail_from_bridge( $email_type, $email_obj ) {

	// Make sure we have a valid `BP_Email` instance.
	if ( ! $email_obj instanceof BP_Email ) {
		return;
	}

	// Get the from `BP_Recipient object.
	$from = $email_obj->get_from();

	// Get the filtered from address and name. Default to the BP Email version.
	$from_email = apply_filters( 'wp_mail_from', $from->get_address() );
	$from_name  = apply_filters( 'wp_mail_from_name', $from->get_name() );

	// Set from to the filtered versions.
	$email_obj->set_from( $from_email, $from_name );
}
add_action( 'bp_email', 'tba_bp_email_to_wp_mail_from_bridge', 20, 2 );
