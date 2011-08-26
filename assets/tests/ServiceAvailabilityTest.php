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
		$this->assertEmpty(PHPUnit_Framework_Constraint_IsType::TYPE_STRING, $this->_availability->getResponseMessage());
	}
}