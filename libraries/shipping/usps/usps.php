<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class usps
{

	private $CI;

	public function  __construct()
	{

		//we're going to have this information in the back end for editing eventually
		//username password, origin zip code etc.
		$this->CI =& get_instance();
		
		// Load our language
		$this->CI->lang->load('shipping/usps');
	}
	
	function rates()
	{

		// Get settings	
	
		//====== USPS code start
	
		// Logic here
	
		//========  USPS Code End
	}
	
	function install()
	{

		// Remove any old settings
		$this->CI->db->delete('settings', array('module' => 'usps'));

		$settings = array(
			array(
				'slug' => 'usps_status',
				'title' => lang('usps:status'),
				'description' => lang('usps:instructions:status'),
				'`default`' => '1',
				'`value`' => '1',
				'type' => 'select',
				'`options`' => lang('usps:instructions:status'),
				'is_required' => 0,
				'is_gui' => 0,
				'module' => 'usps'
				),
			array(
				'slug' => 'usps_user_id',
				'title' => lang('usps:user_id'),
				'description' => lang('usps:instructions:user_id'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'usps'
				),
			array(
				'slug' => 'usps_postal_code',
				'title' => lang('usps:postal_code'),
				'description' => lang('usps:instructions:postal_code'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'usps'
				),
			array(
				'slug' => 'usps_domestic_services',
				'title' => lang('usps:domestic_services'),
				'description' => lang('usps:instructions:domestic_services'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'checkbox',
				'`options`' => lang('usps:choice:domestic_services'),
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'usps'
				),
			array(
				'slug' => 'usps_international_services',
				'title' => lang('usps:international_services'),
				'description' => lang('usps:instructions:international_services'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'checkbox',
				'`options`' => lang('usps:choice:international_services'),
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'usps'
				),
			array(
				'slug' => 'usps_size',
				'title' => lang('usps:size'),
				'description' => lang('usps:instructions:size'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'select',
				'`options`' => lang('usps:choice:size'),
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'usps'
				),
			array(
				'slug' => 'usps_container',
				'title' => lang('usps:container'),
				'description' => lang('usps:instructions:container'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'select',
				'`options`' => lang('usps:choice:container'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'usps'
				),
			array(
				'slug' => 'usps_machinable',
				'title' => lang('usps:machinable'),
				'description' => lang('usps:instructions:machinable'),
				'`default`' => '0',
				'`value`' => '0',
				'type' => 'select',
				'`options`' => lang('usps:choice:machinable'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'usps'
				),
			array(
				'slug' => 'usps_dimensions',
				'title' => lang('usps:dimensions'),
				'description' => lang('usps:instructions:dimensions'),
				'`default`' => '5x6x7',
				'`value`' => '5x6x7',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'usps'
				),
			array(
				'slug' => 'usps_display_delivery_time',
				'title' => lang('usps:display_delivery_time'),
				'description' => lang('usps:instructions:display_delivery_time'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'select',
				'`options`' => lang('usps:choice:display_delivery_time'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'usps'
				),
			array(
				'slug' => 'usps_display_delivery_weight',
				'title' => lang('usps:display_delivery_weight'),
				'description' => lang('usps:instructions:display_delivery_weight'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'select',
				'`options`' => lang('usps:choice:display_delivery_weight'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'usps'
				),
			array(
				'slug' => 'usps_weight_class',
				'title' => lang('usps:weight_class'),
				'description' => lang('usps:instructions:weight_class'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'select',
				'`options`' => lang('usps:choice:weight_class'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'usps'
				),
			array(
				'slug' => 'usps_sort_order',
				'title' => lang('usps:sort_order'),
				'description' => lang('usps:instructions:sort_order'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'usps'
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
		return $this->CI->db->delete('settings', array('module' => 'usps'));
	}
}
