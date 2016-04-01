<?php
/**
 Plugin Name: CWP Support Form
 Description: Handles submissions to support form from inside CF
 */

/**
 * Add data to the response from JWT auth
 */
add_filter( 'jwt_auth_token_before_dispatch', function( $data, WP_User $user ){
	if ( function_exists( 'cf_edd_get_downloads_by_licensed_user' ) ) {
		$data[ 'products' ] = cf_edd_get_downloads_by_licensed_user( $user->ID );
	}else{
		$data[ 'products' ] = [];
	}

	$data[ 'user_name' ] = $user->user_login;

	$data[ 'form_ids' ] = cf_support_form_ids();
	return $data;
}, 20, 2);

/**
 * Include our forms
 */
add_action( 'plugins_loaded', 'cf_support_include_forms' );
function cf_support_include_forms(){
	include dirname( __FILE__ ) . '/forms/remote-login-include.php';
	include dirname( __FILE__ )  . 'forms/remote-support-include.php';
}

/**
 * Add endpoint for submitting support request
 */
add_action( 'rest_api_init', function () {
	register_rest_route( 'calderawp_api/v2', '/support', array(
		'methods' => 'POST',
		'callback' => 'cf_support_rest_submit_cb',
		'args' => [
			'message' => [
				'required' => true,
			],

		]
	) );
} );

/**
 * Add endpoint for getting form IDs
 */
add_action( 'rest_api_init', function () {
	register_rest_route( 'calderawp_api/v2', '/support/forms', array(
		'methods' => 'GET',
		'callback' => 'cf_support_rest_form_ids',
	) );
} );

/**
 * Callback for the get form IDs endpoint
 * @return mixed
 */
function cf_support_rest_form_ids(){
	return rest_ensure_response(  cf_support_form_ids() );
}

/**
 * IDs of forms
 *
 * @return array
 */
function cf_support_form_ids(){
	return [
		'support'   => 'remote-support',
		'login'     => 'remote-login'
	];
}

/**
 * Callback for submissions to the forms
 *
 * @param \WP_REST_Request $request
 *
 * @return mixed
 */
function cf_support_rest_submit_cb( WP_REST_Request $request ){
	$message = $request->get_param( 'message' );
	update_option( 'testfunt', $message );
	return rest_ensure_response( $message );

}


