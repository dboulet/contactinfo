<?php

/**
 * @file
 * Contact Info variable definitions using the Variable API.
 */

/**
* Implements hook_variable_info().
*/
function contactinfo_variable_info($options) {
  $variable['contactinfo'] = array(
    'title' => t('Contact information'),
    'type' => 'array',
    'default' => array(
      'type' => 'personal',
      'fn_n' => array(
        'given-name' => '',
        'family-name' => '',
      ),
      'org' => '',
      'use_site_name' => 0,
      'tagline' =>  '',
      'use_site_slogan' => 0,
      'adr' => array(
        'street-address' => '',
        'locality' => '',
        'region' => '',
        'postal-code' => '',
        'country-name' => '',
      ),
      'location' => array(
        'longitude' => '',
        'latitude' => '',
      ),
      'phone' => array(
        'voice' => '',
        'fax' => '',
      ),
      'email' => '',
    ),
  );

  return $variable;
}
