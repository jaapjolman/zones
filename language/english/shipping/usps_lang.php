<?php

// Settings
$lang['usps:status']								= 'Status';
$lang['usps:user_id']								= 'User ID';
$lang['usps:postal_code']							= 'Postal Code (ZIP)';
$lang['usps:domestic_services']						= 'Domestic Services';
$lang['usps:international_services']				= 'International Services';
$lang['usps:size']									= 'Size';
$lang['usps:container']								= 'Container';
$lang['usps:machinable']							= 'Machinable';
$lang['usps:dimensions']							= 'Dimensions (L x W x H)';
$lang['usps:display_delivery_time']					= 'Display Delivery Time';
$lang['usps:display_delivery_weight']				= 'Display Delivery Weight';
$lang['usps:weight_class']							= 'Weight Class';
$lang['usps:sort_order']							= 'Sort Order';



// Instructions
$lang['usps:instructions:status']								= '';
$lang['usps:instructions:user_id']								= '';
$lang['usps:instructions:postal_code']							= '';
$lang['usps:instructions:domestic_services']					= '';
$lang['usps:instructions:international_services']				= '';
$lang['usps:instructions:size']									= '';
$lang['usps:instructions:container']							= '';
$lang['usps:instructions:machinable']							= '';
$lang['usps:instructions:dimensions']							= 'Average package dimensions for shipping package. Product dimensions are not used for shipping at this time.';
$lang['usps:instructions:display_delivery_time']				= 'Do you want to display the shipping time? (e.g. Ships within 3 to 5 days)';
$lang['usps:instructions:display_delivery_weight']				= 'Do you want to display the shipping weight? (e.g. Delivery Weight : 2.7674 Kg\'s)';
$lang['usps:instructions:weight_class']							= 'Only Pounds are supported.';
$lang['usps:instructions:sort_order']							= '';



// Choice Data
$lang['usps:choice:status']							= '0=Disabled|1=Enabled';
$lang['usps:choice:domestic_services']				= 'usps_domestic_00=First-Class Mail Parcel|'
													.'usps_domestic_01=First-Class Mail Large Envelope|'
													.'usps_domestic_02=First-Class Mail Letter|'
													.'usps_domestic_03=First-Class Mail Postcards|'
													.'usps_domestic_1=Priority Mail|'
													.'usps_domestic_2=Express Mail Hold for Pickup|'
													.'usps_domestic_3=Express Mail|'
													.'usps_domestic_4=Parcel Post|'
													.'usps_domestic_5=Bound Printed Matter|'
													.'usps_domestic_6=Media Mail|'
													.'usps_domestic_7=Library|'
													.'usps_domestic_12=First-Class Postcard Stamped|'
													.'usps_domestic_13=Express Mail Flat-Rate Envelope|'
													.'usps_domestic_16=Priority Mail Flat-Rate Envelope|'
													.'usps_domestic_17=Priority Mail Regular Flat-Rate Box|'
													.'usps_domestic_18=Priority Mail Keys and IDs|'
													.'usps_domestic_19=First-Class Keys and IDs|'
													.'usps_domestic_22=Priority Mail Flat-Rate Large Box|'
													.'usps_domestic_23=Express Mail Sunday/Holiday|'
													.'usps_domestic_25=Express Mail Flat-Rate Envelope Sunday/Holiday|'
													.'usps_domestic_27=Express Mail Flat-Rate Envelope Hold For Pickup|'
													.'usps_domestic_28=Priority Mail Small Flat-Rate Box';

$lang['usps:choice:international_services']			= 'usps_international_1=Express Mail International|'
													.'usps_international_2=Priority Mail International|'
													.'usps_international_4=Global Express Guaranteed (Document and Non-document)|'
													.'usps_international_5=Global Express Guaranteed Document Used|'
													.'usps_international_6=Global Express Guaranteed Non-Document Rectangular Shape|'
													.'usps_international_7=Global Express Guaranteed Non-Document Non-Rectangular|'
													.'usps_international_8=Priority Mail Flat Rate Envelope|'
													.'usps_international_9=Priority Mail Flat Rate Box|'
													.'usps_international_10=Express Mail International Flat Rate Envelope|'
													.'usps_international_11=Priority Mail Flat Rate Large Box|'
													.'usps_international_12=Global Express Guaranteed Envelope|'
													.'usps_international_13=First Class Mail International Letters|'
													.'usps_international_14=First Class Mail International Flats|'
													.'usps_international_15=First Class Mail International Parcels|'
													.'usps_international_16=Priority Mail Flat Rate Small Box|'
													.'usps_international_21=Postcards';

$lang['usps:choice:size']							= 'REGULAR=Regular|LARGE=Large';
$lang['usps:choice:container']						= 'RECTANGULAR=Rectangular|NONRECTANGULAR=Non Rectangular|VARIABLE=Variable';
$lang['usps:choice:machinable']						= '0=No|1=Yes';
$lang['usps:choice:display_delivery_time']			= '0=Disabled|1=Enabled';
$lang['usps:choice:display_delivery_weight']		= '0=Disabled|1=Enabled';
$lang['usps:choice:weight_class']					= '1=Kilogram|2=Gram|5=Pound|6=Ounce';