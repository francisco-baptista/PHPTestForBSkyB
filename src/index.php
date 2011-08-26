<?php
/**
 * 3D Add On Service demo script
 *
 * This tests the 3D Add On Service demo for BSkyB
 * It uses CodeIgniter Code Style
 *
 * @author	Francisco Baptista <francisco@tomboa.net>
 * @link    www.tomboa.net 
 * @link    https://github.com/francisco-baptista/PHPTestForBSkyB
 * @todo    Perhaps hook to a DB
 * @todo    In case a product share the same AddOn it should not repeat the AddOn
 * @todo    Cart frontend interface 
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

echo 'Products on your Basket: <UL>';

foreach($shoping_basket->getItems() as $item)
{
	echo "<LI> {$item->getProductName()}</LI>";
}
echo '</UL>';

/**
 * Check addons availability
 * 
 * Have assumed postcode will be entered by the user 
 * @example $_POST['postcode']
 */
$availability = new ServiceAvailability();

/**
 * Check for Addons
 */
$add_ons = $availability->checkForProductAddons($shoping_basket, 'NW1 6VV');

/**
 * Availability message
 */
echo $availability->getResponseMessage();	

foreach ($add_ons AS $addon)
{
	/**
	 *  Since we could have more than one addon per product
	 */
	echo "<UL>";
		foreach ($addon->getAddons() AS $the_add_on)
		{
			echo "<LI>{$the_add_on->getCode()}</LI>";
		}
	echo "</UL>";
}

echo '<BR/><P>Checkout code at <a href="https://github.com/francisco-baptista/PHPTestForBSkyB">git@github.com:francisco-baptista/PHPTestForBSkyB.git</A></P>';
echo '<P>Please contact <A HREF="mailto:francisco@tomboa.net">francisco@tomboa.net</A></P>';

