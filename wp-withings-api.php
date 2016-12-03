<?php
/**
 * WP-Withings-API https://oauth.withings.com/api/doc#)
 *
 * @package WP-Withings-API
 */

/*
* Plugin Name: WP Withings API
* Plugin URI: https://github.com/wp-api-libraries/wp-withings-api
* Description: Perform API requests to Withings in WordPress.
* Author: WP API Libraries
* Version: 1.0.0
* Author URI: https://wp-api-libraries.com
* GitHub Plugin URI: https://github.com/wp-api-libraries/wp-withings-api
* GitHub Branch: master
*/

/* Exit if accessed directly. */
if ( ! defined( 'ABSPATH' ) ) { exit; }


/* Check if class exists. */
if ( ! class_exists( 'WithingsAPI' ) ) {

	/**
	 * Withings API Class.
	 */
	class WithingsAPI {

		/**
		 * Withings BaseAPI Endpoint
		 *
		 * @var string
		 * @access protected
		 */
		protected $base_uri = 'https://wbsapi.withings.net';

		/**
		 * Construct.
		 *
		 * @access public
		 * @return void
		 */
		public function __construct() {

		}

		/**
		 * Fetch the request from the API.
		 *
		 * @access private
		 * @param mixed $request Request URL.
		 * @return $body Body.
		 */
		private function fetch( $request ) {

			$response = wp_remote_get( $request );
			$code = wp_remote_retrieve_response_code( $response );

			if ( 200 !== $code ) {
				return new WP_Error( 'response-error', sprintf( __( 'Server response code: %d', 'text-domain' ), $code ) );
			}

			$body = wp_remote_retrieve_body( $response );

			return json_decode( $body );

		}

		/**
		 * Get Activity Measures (https://oauth.withings.com/api/doc#api-Measure-get_activity)
		 *
		 * @access public
		 * @param mixed $userid
		 * @param mixed $date (default: null)
		 * @param mixed $startdateymd (default: null)
		 * @param mixed $enddateymd (default: null)
		 * @return void
		 */
		function get_activity( $userid, $date = null, $startdateymd = null, $enddateymd = null ) {

		}

		/**
		 * get_measure function.
		 *
		 * @access public
		 * @param mixed $userid
		 * @param mixed $startdate
		 * @param mixed $enddate
		 * @param mixed $lastupdate
		 * @param mixed $devtype
		 * @param mixed $meastype
		 * @param mixed $category
		 * @param mixed $limit
		 * @param mixed $offset
		 * @return void
		 */
		function get_measure( $userid, $startdate, $enddate, $lastupdate, $devtype, $meastype, $category, $limit, $offset ) {

		}

		/**
		 * get_intraday_activity function.
		 *
		 * @access public
		 * @param mixed $userid
		 * @param mixed $startdate
		 * @param mixed $enddate
		 * @return void
		 */
		function get_intraday_activity( $userid, $startdate, $enddate ) {

		}

		/**
		 * get_sleep_measure function.
		 *
		 * @access public
		 * @param mixed $userid
		 * @param mixed $startdate
		 * @param mixed $enddate
		 * @return void
		 */
		function get_sleep_measure( $userid, $startdate, $enddate ) {

		}

		/**
		 * get_sleep_summary function.
		 *
		 * @access public
		 * @param mixed $startdateymd
		 * @param mixed $enddateymd
		 * @param mixed $lastupdate
		 * @return void
		 */
		function get_sleep_summary( $startdateymd, $enddateymd, $lastupdate ) {

		}

		/**
		 * get_workouts function.
		 *
		 * @access public
		 * @param mixed $userid
		 * @param mixed $startdateymd
		 * @param mixed $enddateymd
		 * @return void
		 */
		function get_workouts( $userid, $startdateymd, $enddateymd ) {

		}

		/* NOTIFICATIONS. */

		public function add_notification() {

		}

		public function get_notification_info() {

		}

		public function list_notifications() {

		}

		public function revoke_notification() {

		}

	}
}
