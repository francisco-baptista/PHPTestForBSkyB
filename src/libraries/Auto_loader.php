<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed!');

/**
 * Auto load classes using SPL
 *
 * @package     BSkyB
 * @subpackage  AutoLoaderClass
 * @category    AutoLoader
 * @author      Francisco Baptista
 */
class Auto_loader 
{
	public function __construct()
	{
		spl_autoload_register (array($this, 'loader'));
	}
	
	private function loader($className) 
	{
		$path = str_replace ( '_', '/', $className );
		include $path . '.php';
	}
}
   /**
	* Check for 3D Add On Products
	*
	* Returns ... containing all
	*
	* @param   object	$basket		Basket object
	* @param   string	$postcode	Valid UK Postcode
	* @return  ....    ...
	* @throws  ReadOnlyException
	*/
    public function checkFor3DAddOnProducts(Basket $basket, $postCode);
}