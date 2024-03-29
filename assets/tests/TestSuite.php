<?php
require_once('PHPUnit/Framework/TestCase.php');

/**
 * Testing outputs
 */
require_once('PHPUnit/Extensions/OutputTestCase.php');

/**
 * Boostrap
 */
require_once('../../src/bootstrap.php');

/**
 * Test Basket
 * 
 * @group suite
 */
class TestSuite extends PHPUnit_Framework_TestCase
{
	/**
	 * Product codes
	 * 
	 * @var array 
	 */
	protected $_products_codes = array('MOVIES1', 'KIDS', 'NEWS');
	
	/**
	 * Product object
	 * 
	 * @var object 
	 */
	protected $_product;
	
	/**
	 * Products
	 * 
	 * @var array 
	 */
	protected $_products = array();
	
	/**
	 * Basket object
	 * 
	 * @var object 
	 */
	protected $_basket;
	
	/**
	 * Service Availability object
	 * 
	 * @var object 
	 */
	protected $_availability;

	/**
	 * A few postcodes
	 * 
	 * @var array
	 */
	protected $_postcodes = array();
	
	/**
	 * Setup
	 * @group suite
	 */
	protected function setUp()
	{
		parent::setUp();
		
		$this->_basket = new Basket();
		
		$this->_product = new ProductMovies1();

		foreach($this->_products_codes as $product_code)
		{
			$this->_products[$product_code] = ProductFactory::getProduct($product_code);
		}
		
		$this->_availability = new ServiceAvailability();
		
		$this->_postcodes = array('UB2 3LP', 'W1W 5DW');
	}
	
	/**
	 * TearDown {@link Basket} and {@link Product} objects
	 * @group suite
	 */
	function tearDown()
	{
        unset($this->_basket);
		
        unset($this->_products);
		
        unset($this->_product);
		
		unset($this->_availability);
    }
}