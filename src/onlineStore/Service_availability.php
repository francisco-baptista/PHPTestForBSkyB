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
class Service_availability implements Three_dee_addon_service 
{
	/**
	 * Availability service message
	 * 
	 * @var $_message string
	 */
	protected $_message;
	
	/**
	 *
	 * @param Basket $basket object
	 * @param string $post_code
	 * @return array 
	 */
	public function check_for_product_addons(Basket $basket, $post_code) 
	{

		/**
		 * Return no empty array if Postcode not right
		 */
		if ( ! isset($post_code)) return array();
		
		$availabilityService = new Availability();
		
		try 
		{
			$availability_response_code = $availabilityService->is_3d_area($post_code);
			
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
			return $basket->get_items();
		}
		
		return array();
	}
	
	/**
	 * Returns message for client.
	 */
	public function get_response_message()
	{
		return $this->_message;
	}
	
}