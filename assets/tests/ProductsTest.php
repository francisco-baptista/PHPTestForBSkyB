<?php
require_once('TestSuite.php');

/**
 * Test Products
 */
class ProductsTest extends TestSuite
{
	/**
	 * Test product code
	 * 
	 * @access public
	 * @group test
	 * @asserts product code is type string
	 */
	public function testProductsAreInstanceOfProductClass()
	{
		foreach($this->_products as $product_code => $product)
		{
			$this->assertInstanceOf("Product{$product_code}", $product);
		}
	}
	
	/**
	 * Test if product has an Addon
	 * 
	 * @access public
	 * @group test
	 * @asserts product Addon array not empty
	 */ 
	public function testOutPutProductCodesIsString()
	{
		foreach($this->_products as $product_code => $product)
		{
			$this->assertSame($product_code, $product->getCode());
			print "\n".$product->getCode();
		}
	}
	
		/**
	 * Test product name
	 * 
	 * @access public
	 * @group test
	 * @asserts product code is type string
	 */
	public function testMovie1ProductName()
	{
		foreach($this->_products as $product_code => $product)
		{
			$this->assertInternalType(PHPUnit_Framework_Constraint_IsType::TYPE_STRING, $product->getProductName());
			print "\n".$product->getProductName();
		}
	}
}
