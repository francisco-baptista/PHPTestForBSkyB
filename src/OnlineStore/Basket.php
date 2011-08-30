<?php
/**
 * Shopping Basket
 * 
 * This class will house the products add to the shopping card
 *
 * @package     BSkyB
 * @subpackage  ShoppingBasket
 * @category    ShoppingBasket
 * @author      Francisco Baptista
 * @example <p> $basket = new Basket(); $basket->addItem({@link Product});</p>
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
	 * Add item to {@link Basket}
	 * 
	 * @access public
	 * @param object Product $product
	 */
	public function addItem($_item)
	{
		$this->_items[] = $_item;
	}
	
	/**
	 * Returns all basket items
	 * 
	 * @access public
	 * @return array basket items
	 */
	public function getItems() 
	{
		return $this->_items;
	}
}