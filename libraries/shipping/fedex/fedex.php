<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class fedex
{

	private $CI;

	public function  __construct()
	{

		//we're going to have this information in the back end for editing eventually
		//username password, origin zip code etc.
		$this->CI =& get_instance();
		
		// Load our language
		$this->CI->lang->load('shipping/fedex');
		
		//$this->server = 'https://gatewaybeta.fedex.com/GatewayDC';
		
		//The WSDL is not included with the sample code.
		//Please include and reference in $path_to_wsdl variable.
		$this->path_to_wsdl = $this->CI->module_details['path'].'libraries/shipping/fedex/libraries/RateService_v8.wsdl';
	}
	
	function rates()
	{

		// Get settings	
	
		//====== Fedex code start
	
		// Logic here
	
		//========  Fedex Code End
	}
	
	function install()
	{

		// Remove any old settings
		$this->CI->db->delete('settings', array('module' => 'fedex'));

		$settings = array(
			array(
				'slug' => 'fedex_status',
				'title' => lang('fedex:status'),
				'description' => lang('fedex:instructions:status'),
				'`default`' => '1',
				'`value`' => '1',
				'type' => 'select',
				'`options`' => lang('fedex:instructions:status'),
				'is_required' => 0,
				'is_gui' => 0,
				'module' => 'fedex'
				),
			array(
				'slug' => 'fedex_key',
				'title' => lang('fedex:key'),
				'description' => lang('fedex:instructions:key'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'fedex'
				),
			array(
				'slug' => 'fedex_password',
				'title' => lang('fedex:password'),
				'description' => lang('fedex:instructions:password'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'password',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'fedex'
				),
			array(
				'slug' => 'fedex_account_number',
				'title' => lang('fedex:account_number'),
				'description' => lang('fedex:instructions:account_number'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'fedex'
				),
			array(
				'slug' => 'fedex_meter_number',
				'title' => lang('fedex:meter_number'),
				'description' => lang('fedex:instructions:meter_number'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'fedex'
				),
			array(
				'slug' => 'fedex_post_code',
				'title' => lang('fedex:post_code'),
				'description' => lang('fedex:instructions:post_code'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'fedex'
				),
			array(
				'slug' => 'fedex_services',
				'title' => lang('fedex:services'),
				'description' => lang('fedex:instructions:services'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'checkbox',
				'`options`' => lang('fedex:choice:services'),
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'fedex'
				),
			array(
				'slug' => 'fedex_drop_off_type',
				'title' => lang('fedex:drop_off_type'),
				'description' => lang('fedex:instructions:drop_off_type'),
				'`default`' => 'FEDEX_ENVELOPE',
				'`value`' => 'FEDEX_ENVELOPE',
				'type' => 'select',
				'`options`' => lang('fedex:choice:drop_off_type'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'fedex'
				),
			array(
				'slug' => 'fedex_packaging_type',
				'title' => lang('fedex:packaging_type'),
				'description' => lang('fedex:instructions:packaging_type'),
				'`default`' => 'REGULAR_PICKUP',
				'`value`' => 'REGULAR_PICKUP',
				'type' => 'select',
				'`options`' => lang('fedex:choice:packaging_type'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'fedex'
				),
			array(
				'slug' => 'fedex_rate_type',
				'title' => lang('fedex:rate_type'),
				'description' => lang('fedex:instructions:rate_type'),
				'`default`' => 'LIST',
				'`value`' => 'LIST',
				'type' => 'select',
				'`options`' => lang('fedex:choice:rate_type'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'fedex'
				),
			array(
				'slug' => 'fedex_display_delivery_time',
				'title' => lang('fedex:display_delivery_time'),
				'description' => lang('fedex:instructions:display_delivery_time'),
				'`default`' => '0',
				'`value`' => '0',
				'type' => 'select',
				'`options`' => lang('fedex:choice:display_delivery_time'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'fedex'
				),
			array(
				'slug' => 'fedex_display_delivery_weight',
				'title' => lang('fedex:display_delivery_weight'),
				'description' => lang('fedex:instructions:display_delivery_weight'),
				'`default`' => '0',
				'`value`' => '0',
				'type' => 'select',
				'`options`' => lang('fedex:choice:display_delivery_weight'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'fedex'
				),
			array(
				'slug' => 'fedex_weight_class',
				'title' => lang('fedex:weight_class'),
				'description' => lang('fedex:instructions:weight_class'),
				'`default`' => '5',
				'`value`' => '5',
				'type' => 'select',
				'`options`' => lang('fedex:choice:weight_class'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'fedex'
				),
			array(
				'slug' => 'fedex_sort_order',
				'title' => lang('fedex:sort_order'),
				'description' => lang('fedex:instructions:sort_order'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'fedex'
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
		return $this->CI->db->delete('settings', array('module' => 'fedex'));
	}
}
