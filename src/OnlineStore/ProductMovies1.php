<?php
/**
 * Movies 1 Product inplements Product
 *
 * @package     BSkyB
 * @subpackage  NewsProducts
 * @category    Class
 * @author      Francisco Baptista
 */
class ProductMovies1 implements Product
{
	/**
	 * List of addons
	 * 
	 * @var array 
	 */
	private $_add_ons = array();
	
	/**
	 * Movies 1 Product Contructor
	 * 
	 * Sets {@link $_add_ons} codes
	 * 
	 * @access public
	 */
	public function __construct() 
	{ 
		/**
		 * Instanciate the Addons through a factory
		 */
		$this->_add_ons = AddOnFactory::getAddOns($this->getCode());
	}
	
	/**
	 * Return product code
	 * 
	 * @access public
	 * @return string
	 * @todo this should be deprecated since a prodcut can have more than one 3D Addon 
	 */
	public function getProductCode()
	{
		return ProductCodes::MOVIES1_PRODUCT_CODE;
	}

	/**
	 * Return product code - getProductCode alias
	 * 
	 * @access public
	 * @return string 
	 * @todo this should be deprecated since a prodcut can have more than one 3D Addon
	 */
	public function getCode()
	{
		return $this->getProductCode();
	}
	
	/**
	 * Return product name
	 * 
	 * @access public
	 * @return string 
	 */
	public function getProductName()
	{
		return ProductCodes::MOVIES1_PRODUCT_NAME;
	}
	
	/**
	 * Get all addons
	 * 
	 * @access public
	 * @return array
	 */
	public function getAddons() 
	{
		return $this->_add_ons;
	}
	
	/**
	 * Count all addons
	 * 
	 * @access public
	 * @return array
	 */
	public function countAddons() 
	{
		return count($this->_add_ons);
	}	
}