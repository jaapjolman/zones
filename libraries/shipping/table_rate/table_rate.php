<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class table_rate
{

	private $CI;

	public $name = 'Table Rate';

	public function  __construct()
	{

		//we're going to have this information in the back end for editing eventually
		//username password, origin zip code etc.
		$this->CI =& get_instance();
		
		// Load our language
		$this->CI->lang->load('shipping/table_rate');
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
		$this->CI->db->delete('settings', array('module' => 'table_rate'));

		$settings = array(
			array(
				'slug' => 'table_rate_status',
				'title' => lang('table_rate:status'),
				'description' => lang('table_rate:instructions:status'),
				'`default`' => '1',
				'`value`' => '1',
				'type' => 'select',
				'`options`' => lang('table_rate:instructions:status'),
				'is_required' => 0,
				'is_gui' => 0,
				'module' => 'table_rate'
				),
			array(
				'slug' => 'table_rate_value',
				'title' => lang('table_rate:value'),
				'description' => lang('table_rate:instructions:value'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'select',
				'`options`' => lang('table_rate:choice:value'),
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'table_rate'
				),
			array(
				'slug' => 'table_rate_table',
				'title' => lang('table_rate:table'),
				'description' => lang('table_rate:instructions:table'),
				'`default`' => "100:20\n200:30\n300:40\n400:50",
				'`value`' => "100:20\n200:30\n300:40\n400:50",
				'type' => 'textarea',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'table_rate'
				),
			array(
				'slug' => 'table_rate_sort_order',
				'title' => lang('table_rate:sort_order'),
				'description' => lang('table_rate:instructions:sort_order'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'table_rate'
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
		return $this->CI->db->delete('settings', array('module' => 'table_rate'));
	}
}
