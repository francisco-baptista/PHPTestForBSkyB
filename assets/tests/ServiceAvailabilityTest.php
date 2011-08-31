<?php
require_once('TestSuite.php');

/**
 * Test Service Availability
 */
class ServiceAvailabilityTest extends TestSuite
{
	/**
	 * Check if {@link $_basket} is an instance of {@link Basket} class
	 * 
	 * @access public
	 * @group test
	 * @asserts object is instence of {@link Basket}
	 */
	public function testIsInstanceOfServiceAvailability()
	{
		$this->assertInstanceOf('ServiceAvailability', $this->_availability);;
	}
	
	/**
	 * Test the basket is empty
	 * 
	 * @access public
	 * @group test
	 * @aserts basket is empty
	 */
	public function testServiceAvailabilityHasResponseMessage()
	{
		$this->assertNotEmpty(PHPUnit_Framework_Constraint_IsType::TYPE_STRING, $this->_availability->getResponseMessage());
		
		// empty reponse message before products were added to shopping cart
		$this->assertEmpty($this->_availability->getResponseMessage());
		
		echo "\n".$this->_availability->getResponseMessage();
	}
	
	/**
	 * Test Service availability when no valid postcode has been passed
	 * 
	 * @access public
	 * @group test
	 * @asserts availability with out postcode
	 */
	public function testServiceAvailabilityWithOutAPostcode()
	{
		$availability = $this->_availability->checkForProductAddons($this->_basket, false);

		// is array type
		$this->assertEquals(array(), $availability);
		
		// is empty array
		$this->assertEquals(0, count($availability));
	}
	
	/**
	 * Test Service availability when a valid postcode has been passed
	 * 
	 * @access public
	 * @group test
	 * @asserts availability with valid postcode
	 */
	public function testServiceAvailabilityWithAValidPostcode()
	{
		$availability = $this->_availability->checkForProductAddons($this->_basket, $this->_postcodes[0]);
		
		// is array type
		//$this->assertEquals(PHPUnit_Framework_Constraint_IsType::TYPE_ARRAY, $availability);
		
		// is empty array
		//$this->assertNotEquals(0, count($availability));
	}
}