<?php
require_once('TestSuite.php');

/**
 * Test Basket
 */
class BasketTestCase extends TestSuite
{
	
	/**
	 * Check if {@link $_basket} is an instance of {@link Basket} class
	 */
	public function testRealBasket()
	{
		$this->assertInstanceOf('Basket', $this->_basket);;
	}
	
	/**
	 * Test the basket is empty
	 */
	public function testEmptyBasket()
	{
		$this->assertEmpty($this->_basket->getItems()->productCount());
	}
	
	/**
	 * Test of the product added to the basket can be found in the basket
	 * 
	 */
	public function testAddNewProductToBasket()
	{
		// add product to basket
		$this->_basket->addItem($this->_product);
		
		// aserts product can be found in the basket
		$this->assertEquals(true, in_array($this->_product->getCode(), $this->_basket->getItems()->getCodes()));
	}
}