<?php 
/**
 * 3D Service Responses
 *
 * Sets reponse messages for the service availability checher
 *
 * @package     BSkyB
 * @subpackage  Responses
 * @category    Responses
 * @author      Francisco Baptista
 */
class Responses 
{
		/**
	 * Service is available
	 * 
	 * @var string
	 */
	const AVAILABLE = "SERVICE_AVAILABLE";
	
	/**
	 * Service is not available
	 * 
	 * @var string
	 */
	const UNAVAILABLE = "SERVICE_UNAVAILABLE";
	
	/**
	 * Temporarely unavailable
	 * 
	 * @var string
	 */
	const PLANNED = "SERVICE_PLANNED";
	
	/**
	 * Wrong/Invalid postcode
	 * 
	 * @var string
	 */
	const INVALID = "POSTCODE_INVALID";
	
	/**
	 * Return service availability response messages
	 * 
	 * @access public
	 * @param string $msg_code
	 * @return string 
	 */
	public static function Msg($msg_code)
	{
		switch($msg_code)
		{
			case 'SERVICE_AVAILABLE':
				return "3DTV service is available for the given post code";
				break;
			case 'SERVICE_UNAVAILABLE':
				return "3DTV service is unavailable for the given post code";
				break;
			case 'SERVICE_PLANNED':
				return "3DTV service is not available right now, but it should be available within the next 3 months";
				break;
			case 'POSTCODE_INVALID':
				return "The supplied postcode is invalid";
				break;
		}
	}
}