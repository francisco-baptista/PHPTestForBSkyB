<?php
require_once('TestSuite.php');

/**
 * Test Movie1 Product
 */
class ProductMovie1TestCase extends TestSuite
{
	/**
	 * Test product code
	 * 
	 * @access public
	 * @group test
	 * @asserts product code is type string
	 */
	public function testMovie1ProductCode()
	{
		$this->assertInternalType(PHPUnit_Framework_Constraint_IsType::TYPE_STRING, $this->_product->getCode());
		
		$this->assertInternalType(PHPUnit_Framework_Constraint_IsType::TYPE_ARRAY, $this->_product->getAddons());
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
		$this->assertEquals('Movies1', $this->_product->getProductName());
		echo "\n" . $this->_product->getProductName();
	}

	/**
	 * Test if product has an Addon
	 * 
	 * @access public
	 * @group test
	 * @asserts product Addon array not empty
	 */ 
	public function testMovie1ProductDoesHaveAddOn()
	{
		$addon = $this->_product->countAddons();
		$this->assertTrue( ! empty($addon));
	}
}
