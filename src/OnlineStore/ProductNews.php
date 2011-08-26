<?php
/**
 * News Product inplements Product
 *
 * @package     BSkyB
 * @subpackage  Product
 * @category    Product
 * @author      Francisco Baptista
 */
class ProductNews implements Product
{
	/**
	 * List of addons
	 * 
	 * @var array 
	 */
	private $_add_ons = array();
	
	/**
	 * News Product Contructor
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
	 */
	public function getProductCode()
	{
		return ProductCodes::NEWS_PRODUCT_CODE;
	}

	/**
	 * Return product code - getProductCode alias
	 * 
	 * @access public
	 * @return string 
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
		return ProductCodes::NEWS_PRODUCT_NAME;
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
}