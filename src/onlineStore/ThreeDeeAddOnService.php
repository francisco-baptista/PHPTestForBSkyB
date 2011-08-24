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
interface Three_dee_addon_Service 
{
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
    public function check_for_product_addons(Basket $basket, $postCode);
}