<?php

/**
 * News Addon inplements Product_addon
 *
 * ...
 *
 * @package     BSkyB
 * @subpackage  NewsAddOn
 * @category    Class
 * @author      Francisco Baptista
 */
class AddOnNewsProduct implements AddOnProduct
{
	
	/**
	 * Returns Addon code
	 * 
	 * @return string 
	 */
	public function getCode()
	{
		return "NEWS_3D_ADD_ON";
	}
}