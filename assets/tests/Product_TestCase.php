<?php
require_once ('PHPUnit/Framework/TestCase.php');

class Product_TestCase extends PHPUnit_Framework_TestCase
{
	protected $products_codes = array('MOVIE1', 'KIDS', 'NEWS');
	
	protected function setUp()
	{
		parent:setUp();
		
		$this->stack = array();
	}

	public function testEmpty()
	{
		$this->assertTrue(empty($this->stack));
	}

	public function testPush()
	{
		array_push($this->stack, 'foo');
		$this->assertEquals('foo', $this->stack[count($this->stack)-1]);
		$this->assertFalse(empty($this->stack));
	}

	public function testPop()
	{
		array_push($this->stack, 'foo');
		$this->assertEquals('foo', array_pop($this->stack));
		$this->assertTrue(empty($this->stack));
	}
}
