<?php

/**
 * Plugin Name:       My Checkout Form
 * Description:       Step by step checkout form
 * Version:           1.0.0
 * Author:            Alan Nguyen
 * Text Domain:       checkout-form
 * Domain Path:       /checkout-form
 */

function mycheckoutform_addPostfixTitle($title) {
    return $title.'_Test';
}

add_filter('the_title', 'mycheckoutform_addPostfixTitle');


