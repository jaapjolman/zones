<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class ups
{

	private $CI;

	public $name = 'United Parcel Service (UPS)';

	public function  __construct()
	{

		//we're going to have this information in the back end for editing eventually
		//username password, origin zip code etc.
		$this->CI =& get_instance();
		
		// Load our language
		$this->CI->lang->load('shipping/ups');
	}
	
	function rates()
	{

		// Get settings	
	
		//====== UPS code start
	
		// Logic here
	
		//========  UPS Code End
	}
	
	function install()
	{

		// Remove any old settings
		$this->CI->db->delete('settings', array('module' => 'ups'));

		$settings = array(
			array(
				'slug' => 'ups_status',
				'title' => lang('ups:status'),
				'description' => lang('ups:instructions:status'),
				'`default`' => '1',
				'`value`' => '1',
				'type' => 'select',
				'`options`' => lang('ups:instructions:status'),
				'is_required' => 0,
				'is_gui' => 0,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_access_key',
				'title' => lang('ups:key'),
				'description' => lang('ups:instructions:access_key'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_username',
				'title' => lang('ups:username'),
				'description' => lang('ups:instructions:username'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_password',
				'title' => lang('ups:password'),
				'description' => lang('ups:instructions:password'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'password',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_pickup_method',
				'title' => lang('ups:pickup_method'),
				'description' => lang('ups:instructions:pickup_method'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'select',
				'`options`' => lang('ups:choice:pickup_method'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_packaging_type',
				'title' => lang('ups:packaging_type'),
				'description' => lang('ups:instructions:packaging_type'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'select',
				'`options`' => lang('ups:choice:packaging_type'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_customer_classification_code',
				'title' => lang('ups:customer_classification_code'),
				'description' => lang('ups:instructions:customer_classification_code'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'select',
				'`options`' => lang('ups:choice:customer_classification_code'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_origin_code',
				'title' => lang('ups:shipping_origin_code'),
				'description' => lang('ups:instructions:shipping_origin_code'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'select',
				'`options`' => lang('ups:choice:shipping_origin_code'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_origin_city',
				'title' => lang('ups:origin_city'),
				'description' => lang('ups:instructions:origin_city'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_origin_state',
				'title' => lang('ups:origin_state'),
				'description' => lang('ups:instructions:origin_state'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_origin_country',
				'title' => lang('ups:origin_country'),
				'description' => lang('ups:instructions:origin_country'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_origin_postal_code',
				'title' => lang('ups:origin_postal_code'),
				'description' => lang('ups:instructions:origin_postal_code'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_quote_type',
				'title' => lang('ups:quote_type'),
				'description' => lang('ups:instructions:quote_type'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'select',
				'`options`' => lang('ups:choice:quote_type'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_services',
				'title' => lang('ups:services'),
				'description' => lang('ups:instructions:services'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'select',
				'`options`' => lang('ups:choice:services'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_enable_insurance',
				'title' => lang('ups:enable_insurance'),
				'description' => lang('ups:instructions:enable_insurance'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'select',
				'`options`' => lang('ups:choice:enable_insurance'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_display_delivery_weight',
				'title' => lang('ups:display_delivery_weight'),
				'description' => lang('ups:instructions:display_delivery_weight'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'select',
				'`options`' => lang('ups:choice:display_delivery_weight'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_weight_class',
				'title' => lang('ups:weight_class'),
				'description' => lang('ups:instructions:weight_class'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'select',
				'`options`' => lang('ups:choice:weight_class'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_length_class',
				'title' => lang('ups:length_class'),
				'description' => lang('ups:instructions:length_class'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'select',
				'`options`' => lang('ups:choice:length_class'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_dimensions',
				'title' => lang('ups:dimensions'),
				'description' => lang('ups:instructions:dimensions'),
				'`default`' => '5x6x7',
				'`value`' => '5x6x7',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'ups'
				),
			array(
				'slug' => 'ups_sort_order',
				'title' => lang('ups:sort_order'),
				'description' => lang('ups:instructions:sort_order'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'ups'
				),
			);// Eof settings
		
		// Try installing the settings
		foreach ($settings as $k=>&$setting)
		{
			log_message('debug', '-- Settings: installing '.$setting['slug']);

			// Push to the last or something
			$setting['order'] = 99 - $k;

			if ( ! $this->CI->db->insert('settings', $setting))
			{
				log_message('debug', '-- -- could not install '.$setting['slug']);
				return false;
			}
		}

		return true;
	}
	
	function uninstall()
	{
		return $this->CI->db->delete('settings', array('module' => 'ups'));
	}
}
