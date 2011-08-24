<?php

interface Availability_checker 
{
	/**
	 * @throws TechnicalFailureException
	 */
	public function isPostCodeIn3DTVServiceArea($postCode);
}
