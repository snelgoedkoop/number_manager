<?php 

/**
 * Bootstrap
 * @author Francis Genet
 * @package Number_manager
 */

// Define default directories
define("ROOT_PATH", dirname(__FILE__) . '/');
define("CERTS_PATH", ROOT_PATH . 'certs/');
define("LIB_PATH", ROOT_PATH . 'lib/');
define("LOGS_PATH", ROOT_PATH . 'logs/');

// Include our auto-loader
require_once(ROOT_PATH . 'autoload.php');