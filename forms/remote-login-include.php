<?php
/**
 * Caldera Forms - PHP Export 
 * Remote Login 
 * @version    1.3.5-b1
 * @license   GPL-2.0+
 * 
 */


/**
 * Filter admin forms to include custom form in admin
 *
 * @since 1.3.1
 *
 * @param array $forms All registered forms
 */
add_filter( "caldera_forms_get_forms", function( $forms ){
	$forms["remote-login"] = apply_filters( "caldera_forms_get_form-remote-login", array() );
	return $forms;
} );

/**
 * Filter form request to include form structure to be rendered
 *
 * @since 1.3.1
 *
 * @param $form array form structure
 */
add_filter( 'caldera_forms_get_form-remote-login', function( $form ){
 return array(
  '_last_updated' => 'Fri, 01 Apr 2016 23:10:56 +0000',
  'ID' => 'remote-login',
  'cf_version' => '1.3.5-b1',
  'name' => 'Remote Login',
  'description' => '',
  'db_support' => 1,
  'pinned' => 1,
  'hide_form' => 1,
  'check_honey' => 1,
  'success' => 'Form has been successfully submitted. Thank you.',
  'avatar_field' => '',
  'custom_callback' => '',
  'form_visibility' => 'all',
  'layout_grid' => 
  array(
    'fields' => 
    array(
      'username' => '1:1',
      'password' => '1:2',
      'login' => '2:1',
    ),
    'structure' => '6:6|12',
  ),
  'fields' => 
  array(
    'username' => 
    array(
      'ID' => 'username',
      'type' => 'text',
      'label' => 'Username',
      'slug' => 'username',
      'conditions' => 
      array(
        'type' => '',
      ),
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'limit' => 0,
        'error' => 'Value already exists',
        'visibility' => 'all',
        'placeholder' => '',
        'default' => '',
        'mask' => '',
        'type_override' => 'text',
      ),
    ),
    'password' => 
    array(
      'ID' => 'password',
      'type' => 'text',
      'label' => 'Password',
      'slug' => 'password',
      'conditions' => 
      array(
        'type' => '',
      ),
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'limit' => 0,
        'error' => 'Value already exists',
        'visibility' => 'all',
        'placeholder' => '',
        'default' => '',
        'mask' => '',
        'type_override' => 'text',
      ),
    ),
    'login' => 
    array(
      'ID' => 'login',
      'type' => 'button',
      'label' => 'Login',
      'slug' => 'login',
      'conditions' => 
      array(
        'type' => '',
      ),
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'limit' => 0,
        'error' => 'Value already exists',
        'visibility' => 'all',
        'type' => 'submit',
        'class' => 'btn btn-default',
        'target' => '',
      ),
    ),
  ),
  'page_names' => 
  array(
    0 => 'Page 1',
  ),
  'conditional_groups' => 
  array(
    '_open_condition' => '',
  ),
  'settings' => 
  array(
    'responsive' => 
    array(
      'break_point' => 'sm',
    ),
  ),
  'mailer' => 
  array(
    'on_insert' => 1,
    'sender_name' => 'Caldera Forms Notification',
    'sender_email' => 'admin@local.dev',
    'reply_to' => '',
    'email_type' => 'html',
    'recipients' => '',
    'bcc_to' => '',
    'email_subject' => 'Remote Login',
    'email_message' => '{summary}',
  ),
  'version' => '1.3.5-b1',
);
} );
