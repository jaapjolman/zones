<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * Store Configuration Module
 *
 * @author 		Ryan Thompson - AI Web Systems, Inc.
 * @subpackage 	Store Configuration Module
 * @category 	Modules
 */
class Shipping extends Admin_Controller
{
	
	// Set the current section
	protected $section  = 'shipping';
	

	public function __construct()
	{
		parent::__construct();
		
		// Load all the required classes
		$this->lang->load('zones');
		$this->load->helper('zones');
		$this->load->library('shipping_utility');
		$this->load->driver('streams');
	}

	// --------------------------------------------------------------------------

	/**
	 * Show all available drivers for shipping
	 *
	 * @access public
	 * @return void
	 */
	public function index()
	{

		// Get all available drivers
		$drivers = $this->shipping_utility->get_all();

		// Build assoc of drivers and details
		foreach($drivers as $slug=>&$driver)
		{
			$driver = array(
				'installed' => $this->settings->get($slug.'_status'),
				'enabled' => $this->settings->get($slug.'_status'),
				);
		}

		// Ready to fuc... go
		$this->template->build('admin/shipping/index', array('drivers' => $drivers));
	}

	// --------------------------------------------------------------------------

	/**
	 * Install a shipping driver
	 *
	 * @access public
	 * @return void
	 */
	public function install( $driver )
	{

		// Get all available drivers
		if ( $this->shipping_utility->install($driver) )
		{
			
		}
		else
		{
			
		}

		redirect(site_url('admin/zones/shipping'));
	}

	// --------------------------------------------------------------------------

	/**
	 * Enable a shipping driver
	 *
	 * @access public
	 * @return void
	 */
	public function enable( $driver )
	{

		// Update status
		$this->db->update('settings', array('value' => 1), array('slug' => $driver.'_status'));
		
		redirect(site_url('admin/zones/shipping'));
	}

	// --------------------------------------------------------------------------

	/**
	 * Disable a shipping driver
	 *
	 * @access public
	 * @return void
	 */
	public function disable( $driver )
	{

		// Update status
		$this->db->update('settings', array('value' => 0), array('slug' => $driver.'_status'));
		
		redirect(site_url('admin/zones/shipping'));
	}

	// --------------------------------------------------------------------------

	/**
	 * Uninstall a shipping driver
	 *
	 * @access public
	 * @return void
	 */
	public function uninstall( $driver )
	{

		// Get all available drivers
		if ( $this->shipping_utility->uninstall($driver) )
		{
			
		}
		else
		{
			
		}

		redirect(site_url('admin/zones/shipping'));
	}
}