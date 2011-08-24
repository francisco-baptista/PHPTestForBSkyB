<?php

/**
 * Online Basket
 *
 * @package     BSkyB
 * @subpackage  BasketClass
 * @category    Basket
 * @author      Francisco Baptista
 */
class Basket 
{
	/**
	 * Store basket items
	 */
	private $_items = array();
	
	public function __construct() 
	{
		$this->_items = new ProductList();
	}
    
	/**
	 *
	 * @param object Product $product
	 */
	public function addItem($_item)
	{
		$this->_items[] = $_item;
	}
	
	/**
	 * Returns all basket items
	 * 
	 * @return array basket items
	 */
	public function getItems() 
	{
		return $this->_items;
	}
}