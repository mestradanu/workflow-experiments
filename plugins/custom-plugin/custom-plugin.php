<?php
/**
 * Plugin Name: NUSA Custom Plugin
 * Description: Custom Plugin for code tests.
 * Version: 1.0.0
 * Author: Mike Estrada
 */

// Broken comment for the code sniffer to find errors
$variable_name = '';

if ( $variable_name == '' ) {
	$variable_name = 'test';
} else if ( $variable_name == 'hello' ) {
	$variable_name = 'hello world';
} else if ( 'another test' == $variable_name) {
	$variable_name = 'another test';
}
