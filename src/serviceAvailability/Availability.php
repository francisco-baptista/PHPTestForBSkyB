<?php 

/**
 * Availability implementes ThreeDeeAddOnService
 *
 * Implementes services availability for given postcode
 *
 * @package     BSkyB
 * @subpackage  ServiceAvailability
 * @category    Class
 * @author      Francisco Baptista
 */
class Availability implements Availability_checker 
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
	public function is_3d_area($post_code)
	{
		
		if ( ! $this->_service_enabled)
		{
			throw new Technical_failure_exception("Technical Failure");
		}
		
		if ( ! $this->valid_postcode($post_code))
		{
			return Responses::INVALID;
		}
		
		// service not available
		if ( ! $this->service_available($post_code))
		{
			return Responses::UNAVAILABLE;
		}
		
		// service is planned
		if ($this->service_planned($post_code))
		{
			return Responses::PLANNED;
		}
		
		return Responses::AVAILABLE;
	}
	
	/**
	 * Checks if postcode region has addon service
	 * 
	 * @param string $post_code
	 * @return boolean TRUE | FALSE
	 */
	public function service_available($post_code) 
	{
		list($region, $area) = explode(' ', $post_code);
		
		if (in_array($region, Postcode::inactive_areas()))
		{
			return FALSE;
		}
		return TRUE;
	}
	
	/**
	 * Checks if postcode region has addon service planned
	 * 
	 * @param string $post_code
	 * @return boolean TRUE | FALSE
	 */
	public function service_planned($post_code) 
	{
		
		list($region, $area) = explode(' ', $post_code);
		
		if (in_array($region, Postcode::planed_areas())) 
		{
			return TRUE;
		}
		return FALSE;
	}
	
	/**
	 * Check if postcode is valid
	 * 
	 * @param strine $post_code
	 * @return boolean TRUE | FALSE
	 * @todo regular expresion not working :(
	 */
	public function valid_postcode($post_code) 
	{
		if (preg_match ( "/^[A-Z]{1,2}[0-9]{2,3}[A-Z]{2}$/", $post_code ) || preg_match ( "/^[A-Z]{1,2}[0-9]{1}[A-Z]{1}[0-9]{1}[A-Z]{2}$/", $post_code ) || preg_match ( "/^GIR0[A-Z]{2}$/", $post_code ))
		{ 
			return TRUE;
		}
		
		return TRUE;
	}

	/**
	 * Disable service
	 */
	public function disable_service() 
	{
		$this->_service_enabled = FALSE;
	}
}