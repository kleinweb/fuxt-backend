<?php
/**
 * This file is the main entry point for WordPress functions.
 *
 * @package kleinweb-backend
 */

namespace Klein\Backend;

require_once __DIR__.'/vendor/autoload.php';

define('KLEINWEB_BACKEND_PLUGIN_NAME', dirname(__FILE__));
define('KLEINWEB_BACKEND_PLUGIN_VERSION', '1.0.0');
define('KLEINWEB_BACKEND_PLUGIN_DIR', __DIR__);

/**
 * Load all modules.
 */
require_once __DIR__ . '/inc/wp-functions.php';
require_once __DIR__ . '/inc/gql-functions.php';
require_once __DIR__ . '/inc/theme-config.php';
require_once __DIR__ . '/inc/gutenberg-functions.php';
require_once __DIR__ . '/inc/acf-functions.php';
require_once __DIR__ . '/inc/cookie-manager.php';
require_once __DIR__ . '/inc/developer-role.php';
require_once __DIR__ . '/inc/widgets.php';
require_once __DIR__ . '/inc/svg.php';
