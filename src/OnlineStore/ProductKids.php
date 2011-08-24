<?php
/**
 * Kids Product inplements Product
 *
 * @package     BSkyB
 * @subpackage  NewsProducts
 * @category    Class
 * @author      Francisco Baptista
 */
class ProductKids implements Product
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
	 * @access public
	 */
	public function __construct() 
	{
		// ...
	}
	
	/**
	 * Return product code
	 * 
	 * @access public
	 * @return string 
	 */
	public function getProductCode()
	{
		return ProductCodes::KIDS_PRODUCT_CODE;
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
	 * News Addons codes
	 * 
	 * @access public
	 * @return array of addons
	 */
	public function getAddonCode() 
	{
		$codes = array();
		
		if ( ! empty($this->_add_ons))
		{
			foreach ($this->_add_ons as $addon)
			{
				$codes[] = $addon->getCode();
			}
		}
		return $codes;
	}
	
	/**
	 * Return product name
	 * 
	 * @access public
	 * @return string 
	 */
	public function getProductName()
	{
		return ProductCodes::KIDS_PRODUCT_NAME;
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