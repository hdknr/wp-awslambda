<?php
/**
 * Plugin Name:     Wp Awslambda
 * Plugin URI:      https://github.com/hdknr/wp-awslambda
 * Description:     AWS Lambda
 * Author:          Hideki Nara
 * Author URI:      https://github.com/hdknr/
 * Text Domain:     wp-awslambda
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Wp_Awslambda
 */
// Your code starts here.

namespace Hdknr\AwsLambda;

if ( ! defined( 'WPINC' ) ) {
    die;
}

require_once __DIR__ . '/src/AwsLambda/Bootstrap.php';
( new Bootstrap( __FILE__ ) )->run();