<?php
/**
 * Online Products factory class
 *
 * This factory returns the product obj for a give product code
 *
 * @package     BSkyB
 * @subpackage  ProductFactory
 * @category    ProductFactory
 * @author      Francisco Baptista
 */
class ProductFactory
{
	/**
	 * Returns the Product object
	 * 
	 * @param string $_product_code
	 * @return obj Online Store Product 
	 */
	public static function getProduct($_product_code)
	{
		/**
		 * Defines the product class name
		 */
		$class_name = 'Product' . ucfirst(strtolower($_product_code));

		/**
		 * Instanciate the product class
		 */
		return new $class_name();
	}
}