<?php
/**
 * prebook Theme Customizer
 *
 * @package prebook
 */

if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.



add_filter( 'cs_customize_options', function( $options ) {

  $options      = array(); // remove old options

$options[]      = array(
  'name'        => 'coffee_social',
  'title'       => 'Footer Social',
  'priority' => 50,
  'settings'    => array(

    array(
      'name'    => 'footer_facebook_link',
      'control' => array(
        'label' => 'Facebook Url:',
        'type'  => 'text',
      ),
    ),

    array(
      'name'    => 'footer_twitter_link',
      'control' => array(
        'label' => 'Twitter Url:',
        'type'  => 'text',
      ),
    ),
   
    array(
      'name'    => 'footer_google_plus_link',
      'control' => array(
        'label' => 'Google+ Url:',
        'type'  => 'text',
      ),
    ),
 
    array(
      'name'    => 'footer_youtube_link',
      'control' => array(
        'label' => 'Youtube Url:',
        'type'  => 'text',
      ),
    ),


    array(
      'name'    => 'footer_pinterest_link',
      'control' => array(
        'label' => 'Pinterest Url:',
        'type'  => 'text',
      ),
    ),  
  )//settings
);

  return $options;

});//end filter


