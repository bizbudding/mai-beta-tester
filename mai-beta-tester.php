<?php
/**
 * Plugin Name:     Mai - Beta Tester
 * Plugin URI:      https://maipro.com
 * Description:     Mai - Beta Tester lets you one-click update to the beta version of Mai Pro Engine.
 * Version:         1.0.0
 *
 * Author:          BizBudding, Mike Hemberger
 * Author URI:      https://bizbudding.com
 */

// Enable beta branch of Mai Pro Engine
add_filter( 'mai_updater_branch', function(){ return 'beta'; });
