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
	 * @access public
	 */
	public function __construct() 
	{ 
		/**
		 * Instanciate News Addon
		 * 
		 * @todo note to self: don't hardcode, instead use a factory
		 */
		$this->_add_ons[] = new AddOnMoviesProduct(); 
	}
	
	/**
	 * Return product code
	 * 
	 * @access public
	 * @return string 
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
}