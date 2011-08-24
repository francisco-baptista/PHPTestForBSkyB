<?php
/**
 * Bootstrap script
 *
 * It auto loads all the classes
 *
 */

/**
 *  display all errors
 */
error_reporting(E_ALL);

/**
 *  ini set diplay errors
 * @example TRUE | FALSE
 */
ini_set('display_errors', TRUE);

/**
 *  Service directory and adds class name to include path
 */
$paths = array(
	get_include_path(),
	realpath(dirname(__FILE__) . '/OnlineStore'),
	realpath(dirname(__FILE__) . '/ServiceAvailability'),
	realpath(dirname(__FILE__) . '/tests'),
);

spl_autoload_extensions('.php');

set_include_path(implode(PATH_SEPARATOR, $paths));

/**
 * Simple autoloader implementation
 */
class My_loader
{
	/**
	 * 
	 */
	public function __construct()
	{
		spl_autoload_register (array($this, 'loader' ));
	}
	
	/**
	 *
	 * @param type $className 
	 */
	private function loader($class_name)
	{
		//$path = str_replace ( '_', '/', $class_name);
		include $class_name . '.php';
	}
}
    
new My_loader();
