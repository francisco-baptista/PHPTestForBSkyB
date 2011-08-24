<?php
/**
 * 3D Add On Service interface
 *
 * This interface contains the standard implementation point
 * for all 3D Add On Services
 *
 * @package     BSkyB
 * @subpackage  3DInterface
 * @category    3DInterface
 * @author      Francisco Baptista
 */
interface ThreeDeeAddOnService 
{
   /**
	* Check for 3D AddOn on Products
	*
    * @access public
	* @param   object	$_basket		Basket object
	* @param   string	$_post_code		Valid UK Postcode
	*/
    public function checkForProductAddons(Basket $_basket, $_post_code);
}