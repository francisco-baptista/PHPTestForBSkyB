<?php 
/**
 * Postcode class
 *
 * Provide postcode zones where 3D Addons are Available | Unavailable | Planed
 *
 * @package     BSkyB
 * @subpackage  Postcode
 * @category    Postcode
 * @author      Francisco Baptista
 */
class Postcode 
{
	/**
	 * Returns postcode zones where 3D Addons are not available
	 * 
	 * @access public
	 * @return array of postcode zones
	 */
	public static function inactiveAreas()
	{
		return array('UB1', 'UB2', 'UB3', 'UB4', 'UB5', 'UB6');
	}
	
	/**
	 * Returns postcode zones where 3D Addon are available
	 * 
	 * @access public
	 * @return array of postcode zones
	 */
	public static function activeAreas()
	{
		return array('W1W', 'W2W', 'W3W', 'W4W', 'W5W', 'W6W');
	}

	/**
	 * Return and array of zones where there are planes to have 3D Addons
	 * 
	 * @access public
	 * @return array of postcode zones
	 */
	public static function planedAreas()
	{
		return array('SE1', 'SE2', 'SE3', 'SE4', 'SE5', 'SE6');
	}
}