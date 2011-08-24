<?php

/**
 * 3D Add On Service demo script
 *
 * This tests the 3D Add On Service demo for BSkyB
 * It uses CodeIgniter Code Style
 *
 * @author	Francisco Baptista
 * @todo DB schema
 * @todo Cart frontend interface 
 */

/**
 * Define a BASE CODE that helps stop deirect access to classes
 */
defined("BASECODE", md5(md5('Kpm6ObcnuHfeNvp7')));

/**
 * Include bootstrap file
 */
require_once (dirname(__FILE__) . '/bootstrap.php');

/**
 * Instanciate the shopping basket
 */
$shoping_basket = new Basket();

/**
 * Add Products to the shopping basket
 * 
 * Have assumed the product code came form a DB
 */
$shoping_basket->addItem(ProductFactory::getProduct(ProductCodes::NEWS_PRODUCT_CODE));
$shoping_basket->addItem(ProductFactory::getProduct(ProductCodes::MOVIES1_PRODUCT_CODE));
$shoping_basket->addItem(ProductFactory::getProduct(ProductCodes::KIDS_PRODUCT_CODE));

echo 'Your Basket: <UL>';

foreach($shoping_basket->getItems() as $item)
{
	echo "<LI> {$item->getProductName()}<UL>";
	
	foreach($item->getAddons() as $addon)
	{
		echo "<LI> {$addon->getCode()}</LI>";
	}
	echo '</UL></LI>';
}
echo '</ul>';
exit;
/**
 * Check addons availability
 * 
 * Have assumed postcode will be entered by the user 
 * @example $_POST['postcode']
 */
$availability = new Service_availability();

$add_ons = $availability->check_for_product_addons($shoping_basket, 'NW1 6VV');

/**
 * Availability message
 */
echo $availability->get_response_message();	

foreach ($add_ons as $addon)
{
	echo "<PRE>"; print_r($addon->get_addon_code()); echo "</PRE>";
}



echo '<p>Checkout code at <a href="https://github.com/francisco-baptista/PHPTestForBSkyB">git@github.com:francisco-baptista/PHPTestForBSkyB.git</a></p>';
echo '<p>Please contact <a href="mailto:francisco@tomboa.net">francisco@tomboa.net</a></p>';

