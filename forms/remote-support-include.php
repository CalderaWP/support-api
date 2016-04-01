<?php
/**
 * Caldera Forms - PHP Export 
 * Remote Support 
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
	$forms["remote-support"] = apply_filters( "caldera_forms_get_form-remote-support", array() );
	return $forms;
} );

/**
 * Filter form request to include form structure to be rendered
 *
 * @since 1.3.1
 *
 * @param $form array form structure
 */
add_filter( 'caldera_forms_get_form-remote-support', function( $form ){
 return array(
  '_last_updated' => 'Fri, 01 Apr 2016 04:12:08 +0000',
  'ID' => 'remote-support',
  'cf_version' => '1.3.4.2',
  'name' => 'Remote Support',
  'description' => '',
  'db_support' => 1,
  'pinned' => 1,
  'hide_form' => 1,
  'check_honey' => 1,
  'success' => 'Support ticket has been submitted. We\'ll be in touch shortly.',
  'avatar_field' => 'email',
  'form_ajax' => 1,
  'custom_callback' => '',
  'form_visibility' => 'all',
  'layout_grid' => 
  array(
    'fields' => 
    array(
      'name' => '1:1',
      'email' => '1:2',
      'message' => '2:1',
      'errors' => '3:1',
      'form_config' => '3:1',
      'disclaimer' => '4:1',
      'send' => '4:2',
      'sysinfo' => '4:2',
    ),
    'structure' => '6:6|12|12|6:6',
  ),
  'fields' => 
  array(
    'name' => 
    array(
      'ID' => 'name',
      'type' => 'text',
      'label' => 'Name',
      'slug' => 'name',
      'conditions' => 
      array(
        'type' => '',
      ),
      'required' => 1,
      'caption' => '',
      'entry_list' => 1,
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
    'email' => 
    array(
      'ID' => 'email',
      'type' => 'email',
      'label' => 'Email',
      'slug' => 'email',
      'conditions' => 
      array(
        'type' => '',
      ),
      'required' => 1,
      'caption' => '',
      'config' => 
      array(
        'custom_class' => '',
        'limit' => 0,
        'error' => 'Value already exists',
        'visibility' => 'all',
        'placeholder' => '',
        'default' => '',
      ),
    ),
    'message' => 
    array(
      'ID' => 'message',
      'type' => 'paragraph',
      'label' => 'Message',
      'slug' => 'message',
      'conditions' => 
      array(
        'type' => '',
      ),
      'required' => 1,
      'caption' => '',
      'entry_list' => 1,
      'config' => 
      array(
        'custom_class' => '',
        'limit' => 0,
        'error' => 'Value already exists',
        'visibility' => 'all',
        'placeholder' => '',
        'rows' => 4,
        'default' => '',
      ),
    ),
    'errors' => 
    array(
      'ID' => 'errors',
      'type' => 'paragraph',
      'label' => 'Errors',
      'slug' => 'errors',
      'conditions' => 
      array(
        'type' => '',
      ),
      'required' => 1,
      'caption' => 'Please list any console errors, or PHP warnings or notices you have received.',
      'config' => 
      array(
        'custom_class' => '',
        'limit' => 0,
        'error' => 'Value already exists',
        'visibility' => 'all',
        'placeholder' => '',
        'rows' => 4,
        'default' => '',
      ),
    ),
    'send' => 
    array(
      'ID' => 'send',
      'type' => 'button',
      'label' => 'Send',
      'slug' => 'send',
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
    'sysinfo' => 
    array(
      'ID' => 'sysinfo',
      'type' => 'hidden',
      'label' => 'sysinfo',
      'slug' => 'sysinfo',
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
        'default' => '',
      ),
    ),
    'disclaimer' => 
    array(
      'ID' => 'disclaimer',
      'type' => 'html',
      'label' => 'Disclaimer',
      'slug' => 'disclaimer',
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
        'default' => 'Please note that we will receive a copy of the system information shown below with your submission.',
      ),
    ),
    'form_config' => 
    array(
      'ID' => 'form_config',
      'type' => 'dropdown',
      'label' => 'Form',
      'slug' => 'form_config',
      'conditions' => 
      array(
        'type' => '',
      ),
      'caption' => 'Select one of your forms to send us the configuration file to test.',
      'config' => 
      array(
        'custom_class' => '',
        'limit' => 0,
        'error' => 'Value already exists',
        'visibility' => 'all',
        'placeholder' => '',
        'auto_type' => '',
        'taxonomy' => 'category',
        'post_type' => 'post',
        'value_field' => 'name',
        'orderby_tax' => 'count',
        'orderby_post' => 'ID',
        'order' => 'ASC',
        'default' => '',
      ),
    ),
  ),
  'page_names' => 
  array(
    0 => 'Page 1',
  ),
  'conditional_groups' => 
  array(
    '_open_condition' => 'con_1647233826205235',
  ),
  'processors' => 
  array(
    'fp_26119529' => 
    array(
      'ID' => 'fp_26119529',
      'runtimes' => 
      array(
        'insert' => 1,
      ),
      'type' => 'auto_responder',
      'config' => 
      array(
        'sender_name' => '%name%',
        'sender_email' => '%email%',
        'subject' => 'CalderaWP Support',
        'recipient_name' => 'Josh Pollock',
        'recipient_email' => 'Josh@CalderaWP',
        'message' => '{summary}
',
      ),
      'conditions' => 
      array(
        'type' => '',
      ),
    ),
    'fp_57010802' => 
    array(
      'ID' => 'fp_57010802',
      'runtimes' => 
      array(
        'insert' => 1,
      ),
      'type' => 'mailchimp',
      'config' => 
      array(
        'apikey' => 'ae40689b651df740954b5ff16157965b-us10',
        'list_id' => 'f402a6993d',
        'lists' => 
        array(
          'f402a6993d' => 'CalderaWP Newsletter',
        ),
        'vars' => 
        array(
          'EMAIL' => 
          array(
            'field' => NULL,
            'name' => 'Email Address',
            'type' => 'email',
          ),
          'FNAME' => 
          array(
            'field' => NULL,
            'name' => 'First Name',
            'type' => 'text',
          ),
          'LNAME' => 
          array(
            'field' => NULL,
            'name' => 'Last Name',
            'type' => 'text',
          ),
          'POSTID' => 
          array(
            'field' => NULL,
            'name' => 'post_id',
            'type' => 'text',
          ),
        ),
        'double_optin' => 1,
        'update_existing' => 1,
        'send_welcome' => 1,
      ),
      'conditions' => 
      array(
        'type' => 'use',
        'group' => 
        array(
          'rw6819217154' => 
          array(
            'cl15879944173' => 
            array(
              'field' => NULL,
              'compare' => 'is',
              'value' => 'opt1939439',
            ),
          ),
        ),
      ),
    ),
    'fp_57359613' => 
    array(
      'ID' => 'fp_57359613',
      'runtimes' => 
      array(
        'insert' => 1,
      ),
      'type' => 'auto_responder',
      'config' => 
      array(
        'sender_name' => 'Josh -- CalderaWP',
        'sender_email' => 'Josh@CalderaWP.com',
        'subject' => 'Your CalderaWP Support Request Has Been Received',
        'recipient_name' => '%name%',
        'recipient_email' => '%email%',
        'message' => 'Thanks for contacting CalderaWP support. We have received your request and will respond by the end of the next business day (eastern time US.)

Take care,
Josh Pollock

Owner/ Other Developer: CalderaWP
https://CalderaWP.com
http://JoshPress.net',
      ),
      'conditions' => 
      array(
        'type' => '',
      ),
    ),
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
    'sender_name' => '%name%',
    'sender_email' => '%email%',
    'reply_to' => '%email%',
    'email_type' => 'html',
    'recipients' => 'support.43374.13f73e4159a0ae63@helpscout.net',
    'bcc_to' => '',
    'email_subject' => 'CalderaWP Support',
    'email_message' => 'From: %email%

Product %which_of_our_products_is_this_question_about_%

{summary}',
  ),
  'version' => '1.3.4.2',
);
} );
