<?php 
/**
 * Product interface
 *
 * This interface contains the standard product implementation
 *
 * @package     BSkyB
 * @subpackage  ProductInterface
 * @category    Product
 * @author      Francisco Baptista
 */
interface Product
{
	/**
	 * Get a product name
	 *
	 * @return  string product name
	 */
	function getProductName();

    /**
	 * Get a product code
	 *
	 * @return  string product code
	 */
	function getProductCode();
}