<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class flat_rate
{

	private $CI;

	public $name = 'Flat Rate';

	public function  __construct()
	{

		//we're going to have this information in the back end for editing eventually
		//username password, origin zip code etc.
		$this->CI =& get_instance();
		
		// Load our language
		$this->CI->lang->load('shipping/flat_rate');
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
		$this->CI->db->delete('settings', array('module' => 'flat_rate'));

		$settings = array(
			array(
				'slug' => 'flat_rate_status',
				'title' => lang('flat_rate:status'),
				'description' => lang('flat_rate:instructions:status'),
				'`default`' => '1',
				'`value`' => '1',
				'type' => 'select',
				'`options`' => lang('flat_rate:instructions:status'),
				'is_required' => 0,
				'is_gui' => 0,
				'module' => 'flat_rate'
				),
			array(
				'slug' => 'flat_rate_rate',
				'title' => lang('flat_rate:rate'),
				'description' => lang('flat_rate:instructions:rate'),
				'`default`' => '5',
				'`value`' => '5',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'flat_rate'
				),
			array(
				'slug' => 'flat_rate_type',
				'title' => lang('flat_rate:type'),
				'description' => lang('flat_rate:instructions:type'),
				'`default`' => 'A',
				'`value`' => 'A',
				'type' => 'select',
				'`options`' => lang('flat_rate:choice:type'),
				'is_required' => 1,
				'is_gui' => 1,
				'module' => 'flat_rate'
				),
			array(
				'slug' => 'flat_rate_sort_order',
				'title' => lang('flat_rate:sort_order'),
				'description' => lang('flat_rate:instructions:sort_order'),
				'`default`' => '',
				'`value`' => '',
				'type' => 'text',
				'`options`' => '',
				'is_required' => 0,
				'is_gui' => 1,
				'module' => 'flat_rate'
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
		return $this->CI->db->delete('settings', array('module' => 'flat_rate'));
	}
}
