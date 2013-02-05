<?php

// Settings
$lang['ups:status']								= 'Status';
$lang['ups:access_key']							= 'Access Key';
$lang['ups:username']							= 'Username';
$lang['ups:password']							= 'Password';
$lang['ups:pickup_method']						= 'Pickup Method';
$lang['ups:packaging_type']						= 'Packaging Type';
$lang['ups:customer_classification_code']		= 'Customer Classification Code';
$lang['ups:shipping_origin_code']				= 'Shipping Origin Code';
$lang['ups:origin_city']						= 'Origin City';
$lang['ups:origin_state']						= 'Origin State';
$lang['ups:origin_country']						= 'Origin Country';
$lang['ups:origin_postal_code']					= 'Origin ZIP / Postal Code';
$lang['ups:quote_type']							= 'Quote Type';
$lang['ups:services']							= 'Services';
$lang['ups:enable_insurance']					= 'Enable Insurance';
$lang['ups:display_delivery_weight']			= 'Display Delivery Weight';
$lang['ups:weight_class']						= 'Weight Class';
$lang['ups:length_class']						= 'Length Class';
$lang['ups:dimensions']							= 'Dimensions (L x W x H)';
$lang['ups:sort_order']							= 'Sort Order';



// Instructions
$lang['ups:instructions:status']								= '';
$lang['ups:instructions:access_key']							= 'Enter the XML rates access key assigned to you by UPS.';
$lang['ups:instructions:username']								= 'Enter your UPS Services account username.';
$lang['ups:instructions:password']								= 'Enter your UPS Services account password.';
$lang['ups:instructions:pickup_method']							= 'How do you give packages to UPS (only used when origin is US)?';
$lang['ups:instructions:packaging_type']						= 'What kind of packaging do you use?';
$lang['ups:instructions:customer_classification_code']			= '01 - If you are billing to a UPS account and have a daily UPS pickup, 03 - If you do not have a UPS account or you are billing to a UPS account but do not have a daily pickup, 04 - If you are shipping from a retail outlet (only used when origin is US)';
$lang['ups:instructions:shipping_origin_code']					= 'What origin point should be used (this setting affects only what UPS product names are shown to the user)';
$lang['ups:instructions:origin_city']							= 'Enter the name of the origin city.';
$lang['ups:instructions:origin_state']							= 'Enter the two-letter code for your origin state/province.';
$lang['ups:instructions:origin_country']						= 'Enter the two-letter code for your origin country.';
$lang['ups:instructions:origin_postal_code']					= 'Enter your origin zip/postalcode.';
$lang['ups:instructions:quote_type']							= 'Quote for Residential or Commercial Delivery.';
$lang['ups:instructions:services']								= 'Select the UPS services to be offered.';
$lang['ups:instructions:enable_insurance']						= 'Enables insurance with product total as the value.';
$lang['ups:instructions:display_delivery_weight']				= 'Do you want to display the shipping weight? (e.g. Delivery Weight : 2.7674 Kg\'s)';
$lang['ups:instructions:weight_class']							= '';
$lang['ups:instructions:length_class']							= '';
$lang['ups:instructions:dimensions']							= 'This is assumed to be your average packing box size. Individual item dimensions are not supported at this time so you must enter average dimensions like 5x5x5.';
$lang['ups:instructions:sort_order']							= '';



// Choice Data
$lang['ups:choice:status']							= '0=Disabled|1=Enabled';
$lang['ups:choice:pickup_method']					= '01=Daily Pickup|03=Customer Counter|06=One Time Pickup|07=On Call Air Pickup|19=Letter Center|20=Air Service Center|11=Suggested Retail Rates (UPS Store)';
$lang['ups:choice:packaging_type']					= '02=Package|01=UPS Letter|03=UPS Tube|04=UPS Pak|21=UPS Express Box|24=UPS 25kg box|25=UPS 10kg box';
$lang['ups:choice:customer_classification_code']	= '01=01|03=03|04=04';
$lang['ups:choice:shipping_origin_code']			= 'US=US Origin|CA=Canada Origin|EU=European Union Origin|PR=Puerto Rico Origin|MX=Mexico Origin|other=All Other Origins';
$lang['ups:choice:quote_type']						= 'residential=Residential|commercial=Commercial';
$lang['ups:choice:services']						= '01=UPS Next Day Air|'
													.'02=UPS Second Day Air|'
													.'03=UPS Ground|'
													.'07=UPS Worldwide Express|'
													.'08=UPS Worldwide Expedited|'
													.'11=UPS Standard|'
													.'12=UPS Three-Day Select|'
													.'13=UPS Next Day Air Saver|'
													.'14=UPS Next Day Air Early AM|'
													.'54=UPS Worldwide Express Plus|'
													.'59=UPS Second Day Air AM|'
													.'65=UPS Saver';

$lang['ups:choice:enable_insurance']				= '0=Disabled|1=Enabled';
$lang['ups:choice:display_delivery_weight']			= '0=Disabled|1=Enabled';
$lang['ups:choice:weight_class']					= '1=Kilogram|2=Gram|5=Pound|6=Ounce';
$lang['ups:choice:length_class']					= '1=Centimeter|2=Millimeter|3=Inch';