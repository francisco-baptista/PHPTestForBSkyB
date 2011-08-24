<?php 
/**
 * Exceptions
 *
 * @package     BSkyB
 * @subpackage  Exceptions
 * @category    Exceptions
 * @author      Francisco Baptista
 */
class Exceptions 
{
	/**
	 * Class atttibut must be a instance of Product class
	 */
	const INSTANCE_OF_PRODUCT	= "This product must to be an instance of OnlineStore_Product";
	
	const PRODUCT_ALREADY_EXIST	= "This product is already on the list";
	
	const TECHNICAL_FAILURE		= "Technical Failure";
}