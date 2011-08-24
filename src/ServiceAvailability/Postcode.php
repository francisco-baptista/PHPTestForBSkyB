<?php 

/**
 * Postcode Service class
 *
 * Provide inactive and service plan and active 3d addons zones
 *
 * @package     BSkyB
 * @subpackage  Postcode
 * @category    Class
 * @author      Francisco Baptista
 */
class Postcode 
{
	/**
	 *
	 * @return type 
	 */
	public static function inactive_areas()
	{
		return array('UB1', 'UB2', 'UB3', 'UB4', 'UB5', 'UB6');
	}
	
	/**
	 *
	 * @return type 
	 */
	public static function active_areas()
	{
		return array('W1W', 'W2W', 'W3W', 'W4W', 'W5W', 'W6W');
	}

	/**
	 *
	 * @return type 
	 */
	public static function planed_areas()
	{
		return array('SE1', 'SE2', 'SE3', 'SE4', 'SE5', 'SE6');
	}
	
}