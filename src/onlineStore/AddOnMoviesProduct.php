<?php
/**
 * Movies Addon inplements Product_addon
 *
 * ...
 *
 * @package     BSkyB
 * @subpackage  NewsAddOn
 * @category    Class
 * @author      Francisco Baptista
 */
class AddOnMoviesProduct implements AddOnProduct
{
	/**
	 * Returns Addon code
	 * 
	 * @return string 
	 */
	public function getCode()
	{
		return "MOVIES_3D_ADD_ON";
	}
}