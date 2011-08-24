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
interface AvailabilityChecker 
{
	/**
	 * @throws TechnicalFailureException
	 */
	public function isThreeDeeArea($_post_code);
}
