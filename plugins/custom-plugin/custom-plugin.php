<?php
/**
 * Plugin Name: NUSA Custom Plugin
 * Description: Custom Plugin for code tests.
 * Version: 1.0.0
 * Author: Mike Estrada
 */

// Broken comment for the code sniffer to find
$variable_name = '';

if ( $variable_name == '' ) {
	$variable_name = 'test';
} else if ( 'hello' == $variable_name ) {
	$variable_name = 'hello world';
}
