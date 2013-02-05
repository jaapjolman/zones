<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 * Store Configuration Module - Manage products, services and their attributes.
 *
 * @author 		Ryan Thompson - AI Web Systems, Inc.
 * @package 	CMS
 * @subpackage 	Store Configuration Module
 * @category 	Modules
 */
class Zones extends Admin_Controller
{
	
	// Set the section	
	protected $section = 'zones';

	public function __construct()
	{
		parent::__construct();

		// Load all the required classes
		$this->lang->load('zones');
		$this->load->helper('zones');
		$this->load->driver('streams');


		// Always load these
		$this->template
			->append_css('module::admin.css')
			->append_js('module::admin.js');
	}

	// --------------------------------------------------------------------------

	/**
	 * List all existing store
	 *
	 * @access public
	 * @return void
	 */
	public function index()
	{

		// Set the title
		$this->template->title(lang('zones:title:zones'));


		// Set some extras
		$extra = array(
			'title'		=> lang('zones:title:zones'),
			'buttons'	=> array(
				array(
					'label' 	=> lang('global:edit'),
					'url' 		=> 'admin/zones/edit/-entry_id-',
					),
				array(
					'label'		=> lang('global:delete'),
					'url' 		=> 'admin/zones/delete/-entry_id-',
					'confirm'	=> true,
					),
				),
			'filters'	=> array('name', 'iso_code_2', 'iso_code_3'),
			);
		
		$this->streams->cp->entries_table('zones', 'zones', $this->settings->get('records_per_page'), 'admin/zones/index', true, $extra);
	}

	// --------------------------------------------------------------------------
	
	/**
	 * Create a new product
	 *
	 * @access public
	 * @return void
	 */
	public function create()
	{

		// Set the title
		$this->template->title(lang('zones:title:create_zone'));

		
		/* Start normal Streams_Core stuff
		-----------------------------------*/

		// Set some shit
		$extra = array(
			'return'			=> 'admin/zones',
			'title'				=> lang('zones:title:create_zone'),
		);


		// Build it
		$this->streams->cp->entry_form('zones', 'zones', $mode = 'new', null, true, $extra);
	}
	
	// --------------------------------------------------------------------------
	
	/**
	 * Edit a product
	 *
	 * @access public
	 * @return void
	 */
	public function edit($id)
	{
		// Set the title
		$this->template->title(lang('zones:title:edit_zone'));

		
		/* Start normal Streams_Core stuff
		-----------------------------------*/

		// Set some shit
		$extra = array(
			'return'			=> 'admin/zones',
			'title'				=> lang('zones:title:edit_zone'),
		);


		// Build it
		$this->streams->cp->entry_form('zones', 'zones', $mode = 'edit', $id, true, $extra);
	}

	// --------------------------------------------------------------------------

	/**
	 * Delete an existing product entry
	 *
	 * @access	public
	 * @return	void
	 */
	public function delete($id = false)
	{

		// Delete the entry
		$this->streams->entries->delete_entry($id, 'zones', 'zones');

		redirect('admin/zones');
	}
}

