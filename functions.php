<?php
/**
 * This file is the main entry point for WordPress functions.
 *
 * @package kleinweb-backend
 */

define('KLEINWEB_VERSION', wp_get_theme('kleinweb-backend')->get('Version'));

/**
 * Load all modules.
 */
require_once get_template_directory() . '/functions/wp-functions.php';
require_once get_template_directory() . '/functions/gql-functions.php';
require_once get_template_directory() . '/functions/theme-config.php';
require_once get_template_directory() . '/functions/gutenberg-functions.php';
require_once get_template_directory() . '/functions/acf-functions.php';
require_once get_template_directory() . '/functions/cookie-manager.php';
require_once get_template_directory() . '/functions/developer-role.php';
require_once get_template_directory() . '/functions/widgets.php';
require_once get_template_directory() . '/functions/svg.php';
