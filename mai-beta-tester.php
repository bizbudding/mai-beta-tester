<?php
/**
 * Plugin Name:     Mai - Beta Tester
 * Plugin URI:      https://maipro.com
 * Description:     Mai - Beta Tester lets you one-click update to the beta version of Mai Pro Engine.
 * Version:         1.0.1
 *
 * Author:          BizBudding, Mike Hemberger
 * Author URI:      https://bizbudding.com
 */

/**
 * Setup the updater
 * to enable updates for this plugin.
 */
if ( class_exists( 'Puc_v4_Factory' ) ) {
	$updater = Puc_v4_Factory::buildUpdateChecker( 'https://github.com/maiprowp/mai-beta-tester/', __FILE__, 'mai-beta-tester' );
}

// Enable beta branch of Mai Pro Engine
add_filter( 'mai_updater_branch', function(){ return 'beta'; });
