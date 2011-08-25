<?php 
/**
 * Availability implementes ThreeDeeAddOnService
 *
 * Implementes services availability for given postcode
 *
 * @package     BSkyB
 * @subpackage  Availability
 * @category    Availability
 * @author      Francisco Baptista
 */
class Availability implements AvailabilityChecker 
{

	/**
	 * Enableds or disableds service
	 * 
	 * @var boolean
	 */
	protected $_service_enabled = TRUE;
	
	/**
	 * @param string $post_code
	 * @return boolean
	 * @throws Technical_failure_exception
	 */
	public function isThreeDeeArea($_post_code)
	{
		
		if ( ! $this->_service_enabled)
		{
			throw new TechnicalFailureException(Exceptions::TECHNICAL_FAILURE);
		}
		/**
		 * Check if postcode is valid UK postcode
		 */
		if ( ! $this->validPostcode($_post_code))
		{
			return Responses::INVALID;
		}
		
		/**
		 *  service not available
		 */
		if ( ! $this->serviceAvailable($_post_code))
		{
			return Responses::UNAVAILABLE;
		}
		
		/**
		 *  service is planned
		 */
		if ($this->servicePlanned($_post_code))
		{
			return Responses::PLANNED;
		}
		
		return Responses::AVAILABLE;
	}
	
	/**
	 * Checks if postcode region has addon service
	 * 
	 * @access public
	 * @param string $_post_code
	 * @return boolean TRUE | FALSE
	 */
	public function serviceAvailable($_post_code) 
	{
		list($region, $area) = explode(' ', $_post_code);
		
		if (in_array($region, Postcode::inactiveAreas()))
		{
			return FALSE;
		}
		return TRUE;
	}
	
	/**
	 * Checks if postcode region has addon service planned
	 * 
	 * @access public
	 * @param string $post_code
	 * @return boolean TRUE | FALSE
	 */
	public function servicePlanned($_post_code) 
	{
		list($region, $area) = explode(' ', $_post_code);
		
		if (in_array($region, Postcode::planedAreas())) 
		{
			return TRUE;
		}
		return FALSE;
	}
	
	/**
	 * Check if postcode is valid
	 * 
	 * @access public
	 * @param strine $_post_code
	 * @return boolean TRUE | FALSE
	 * @todo regular expresion not working :(
	 */
	public function validPostcode($_post_code) 
	{
		if (preg_match ( "/^[A-Z]{1,2}[0-9]{2,3}[A-Z]{2}$/", $_post_code ) || preg_match ( "/^[A-Z]{1,2}[0-9]{1}[A-Z]{1}[0-9]{1}[A-Z]{2}$/", $_post_code ) || preg_match ( "/^GIR0[A-Z]{2}$/", $_post_code ))
		{ 
			return TRUE;
		}
		
		return TRUE;
	}

	/**
	 * Disable service sets {@link $_service_enabled}
	 * 
	 * @access public
	 * @return void
	 */
	public function disableService() 
	{
		$this->_service_enabled = FALSE;
	}
}