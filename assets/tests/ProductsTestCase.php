<?php
require_once('TestSuite.php');

/**
 * Test Products
 */
class ProductsTestCase extends TestSuite
{
	/**
	 * Test product code
	 * 
	 * @access public
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
}
