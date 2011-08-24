<?php

/**
 * Service Availability Checker interface
 *
 * This interface contains the Availability Checker implementation
 *
 * @package     BSkyB
 * @subpackage  AvailabilityCheckerInterface
 * @category    3DAddOnService
 * @author      Francisco Baptista
 */
interface Availability_checker 
{
	/**
	 * @throws TechnicalFailureException
	 */
	public function is_3d_area($post_code);
}
