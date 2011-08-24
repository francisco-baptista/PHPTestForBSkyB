<?php

/**
 * 3D Add On Service interface
 *
 * This interface contains the standard implementation point
 * for all 3D Add On Services
 *
 * @package     BSkyB
 * @subpackage  3DInterface
 * @category    3DAddOnService
 * @author      Francisco Baptista
 */
interface Three_dee_addon_service 
{
   /**
	* Check for 3D Add On Products
	*
	* @param   object	$basket		Basket object
	* @param   string	$post_code	Valid UK Postcode
	*/
    public function check_for_product_addons(Basket $basket, $post_code);
}