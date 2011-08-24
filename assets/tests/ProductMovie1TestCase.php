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
	 * @asserts product code is type string
	 */
	public function testMovie1ProductCode()
	{
		$this->assertInternalType(PHPUnit_Framework_Constraint_IsType::TYPE_STRING, $this->_product->getCode());
	}

	/**
	 * Test if product has an Addon
	 * 
	 * @access public
	 * @asserts product Addon array not empty
	 */ 
	public function testMovie1ProductDoesHaveAddOn()
	{
		$addon = $this->_product->countAddons();
		$this->assertTrue( ! empty($addon));
	}
}
