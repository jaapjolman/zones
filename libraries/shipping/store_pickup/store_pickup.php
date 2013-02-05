<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class store_pickup
{

	private $CI;

	public function  __construct()
	{

		//we're going to have this information in the back end for editing eventually
		//username password, origin zip code etc.
		$this->CI =& get_instance();
		
		// Load our language
		$this->CI->lang->load('shipping/store_pickup');
	}
	
	function rates()
	{
		
		// Get settings	
	
		//====== Flatrate code start
	
		// Logic here
	
		//========  Flatrate Code End
	}
	
	function install()
	{

		// Remove any old settings
		$this->CI->db->delete('settings', array('module' => 'store_pickup'));

		$settings = array(
			array(
				'slug' => 'store_pickup_status',
				'title' => lang('store_pickup:status'),
				'description' => lang('store_pickup:instructions:status'),
				'`default`' => '1',
				'`value`' => '1',
				'type' => 'select',
				'`options`' => lang('store_pickup:instructions:status'),
				'is_required' => 0,
				'is_gui' => 0,
				'module' => 'store_pickup'
				),
			array(
				'slug' => 'store_pickup_sort_order',
				'title' => lang('store_pickup:sort_order'),
				'description' => lang('store_pickup:instructions:sort_order'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'store_pickup'
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
		return $this->CI->db->delete('settings', array('module' => 'store_pickup'));
	}
}
