<?php
require_once('TestSuite.php');

/**
 * Test Basket
 */
class BasketTestCase extends TestSuite
{
	/**
	 * Check if {@link $_basket} is an instance of {@link Basket} class
	 * 
	 * @access public
	 * @asserts object is instence of {@link Basket}
	 */
	public function testIsInstanceOfBasket()
	{
		$this->assertInstanceOf('Basket', $this->_basket);;
	}
	
	/**
	 * Test the basket is empty
	 * 
	 * @access public
	 * @aserts basket is empty
	 */
	public function testEmptyBasket()
	{
		$this->assertEmpty($this->_basket->getItems()->productCount());
	}
	
	/**
	 * Test of the product added to the basket can be found in the basket
	 * 
	 * @access public
	 * @asserts if product can be found in basket
	 */
	public function testProductCanBeFoundInBasket()
	{
		// add product to basket
		$this->_basket->addItem($this->_product);
		
		// aserts product can be found in the basket
		$this->assertEquals(TRUE, in_array($this->_product->getCode(), $this->_basket->getItems()->getCodes()));
	}
	
	/**
	 * Test if random product code is in
	 * 
	 * @access public
	 * @asserts a random product is in the basket
	 */
	public function testRandomProductIsInBasket()
	{
		// aserts product can be found in the basket
		$this->assertFalse(in_array('RANDOM', $this->_basket->getItems()->getCodes()));
	}
}