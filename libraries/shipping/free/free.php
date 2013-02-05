<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class free
{

	private $CI;

	public function  __construct()
	{

		//we're going to have this information in the back end for editing eventually
		//username password, origin zip code etc.
		$this->CI =& get_instance();
		
		// Load our language
		$this->CI->lang->load('shipping/free');
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
		$this->CI->db->delete('settings', array('module' => 'free'));

		$settings = array(
			array(
				'slug' => 'free_status',
				'title' => lang('free:status'),
				'description' => lang('free:instructions:status'),
				'`default`' => '1',
				'`value`' => '1',
				'type' => 'select',
				'`options`' => lang('free:instructions:status'),
				'is_required' => 0,
				'is_gui' => 0,
				'module' => 'free'
				),
			array(
				'slug' => 'free_total',
				'title' => lang('free:total'),
				'description' => lang('free:instructions:total'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'free'
				),
			array(
				'slug' => 'free_sort_order',
				'title' => lang('free:sort_order'),
				'description' => lang('free:instructions:sort_order'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'free'
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
		return $this->CI->db->delete('settings', array('module' => 'free'));
	}
}
