<?php
require_once('PHPUnit/Framework/TestCase.php');

require_once('../../src/bootstrap.php');

/**
 * Test Basket
 */
class TestSuite extends PHPUnit_Framework_TestCase
{
	protected $_products_codes = array('MOVIE1', 'KIDS', 'NEWS');
	
	protected $_product;
	
	protected $_basket;
	
	/**
	 * Setup
	 */
	protected function setUp()
	{
		parent::setUp();
		
		$this->_basket = new Basket();
		
		$this->_product = new ProductMovies1();
		
	}
	
	/**
	 * TearDown
	 */
	function tearDown()
	{
        unset($this->_basket);
        unset($this->_product);
    }
}