<?php
/**
 * Addon factory class
 *
 * This factory returns the addon for a given product code
 *
 * @package     BSkyB
 * @subpackage  AddOnFactory
 * @category    AddOnFactory
 * @author      Francisco Baptista
 */
class AddOnFactory
{
	/**
	 * Return product addons
	 * 
	 * @param string $_product_code
	 * @return array of addon objects 
	 */
	public static function getAddOns($_product_code)
	{
		$_product_add_ons = array();
		
		/**
		 * This way we can have more than one addon per product or products sharing addons
		 */
		switch ($_product_code)
		{
			case ProductCodes::NEWS_PRODUCT_CODE:
				$_product_add_ons[] = new AddOnNewsProduct();
				break;
			case ProductCodes::MOVIES1_PRODUCT_CODE:
			case ProductCodes::MOVIES2_PRODUCT_CODE:
				$_product_add_ons[] = new AddOnMoviesProduct();
				break;
			case ProductCodes::KIDS_PRODUCT_CODE:
				//... does not have add ons
				break;
		}
		return $_product_add_ons;
	}
}