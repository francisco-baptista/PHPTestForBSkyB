<?php 
/**
 * Service Availability implementes ThreeDeeAddOnService
 *
 * Implementes services availability for given postcode
 *
 * @package     BSkyB
 * @subpackage  ServiceAvailability
 * @category    Class
 * @author      Francisco Baptista
 */
class ServiceAvailability implements ThreeDeeAddOnService 
{
	/**
	 * Availability service message
	 * 
	 * @var $_message string
	 */
	protected $_message;
	
	/**
	 * Check for Addos
	 * 
	 * @access public
	 * @param Basket $basket object
	 * @param string $post_code
	 * @return array 
	 */
	public function checkForProductAddons(Basket $_basket, $_post_code = FALSE) 
	{

		/**
		 * Return no empty array if Postcode not right
		 */
		if ( ! isset($_post_code) || $_post_code == FALSE) return array();
		
		$availabilityService = new Availability();
		
		try 
		{
			$availability_response_code = $availabilityService->isThreeDeeArea($_post_code);
			
			$this->_message = Responses::Msg($availability_response_code);
		} 
		catch (TechnicalFailureException $e)
		{
			return array();
		}
		
		// Invalid postcode. Don't return any addons and set the message for client.
		if ($availability_response_code == Responses::INVALID) 
		{
			$this->_message = Responses::Msg($availability_response_code);
			return array();
		}
		
		if ($availability_response_code == Responses::AVAILABLE)
		{
			$this->_message = Responses::Msg($availability_response_code);
			return $_basket->getItems();
		}
		
		return array();
	}
	
	/**
	 * Returns message for client.
	 * 
	 * @access public
	 * @return string
	 */
	public function getResponseMessage()
	{
		return $this->_message;
	}
}