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
class Tax_classes extends Admin_Controller
{
	
	// Set the section	
	protected $section = 'tax_classes';

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
		$this->template->title(lang('zones:title:tax_classes'));


		// Set some extras
		$extra = array(
			'title'		=> lang('zones:title:tax_classes'),
			'buttons'	=> array(
				array(
					'label' 	=> lang('global:edit'),
					'url' 		=> 'admin/zones/tax_classes/edit/-entry_id-',
					),
				array(
					'label'		=> lang('global:delete'),
					'url' 		=> 'admin/zones/tax_classes/delete/-entry_id-',
					'confirm'	=> true,
					),
				),
			'filters'	=> array('name', 'iso_code_2', 'iso_code_3'),
			);
		
		$this->streams->cp->entries_table('tax_classes', 'zones', $this->settings->get('records_per_page'), 'admin/zones/tax_classes/index', true, $extra);
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
		$this->template->title(lang('zones:title:create_tax_class'));

		
		/* Start normal Streams_Core stuff
		-----------------------------------*/

		// Set some shit
		$extra = array(
			'return'			=> 'admin/zones/tax_classes',
			'title'				=> lang('zones:title:create_tax_class'),
		);


		// Build it
		$this->streams->cp->entry_form('tax_classes', 'zones', $mode = 'new', null, true, $extra);
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
		$this->template->title(lang('zones:title:edit_tax_class'));

		
		/* Start normal Streams_Core stuff
		-----------------------------------*/

		// Set some shit
		$extra = array(
			'return'			=> 'admin/zones/tax_classes',
			'title'				=> lang('zones:title:edit_tax_class'),
		);


		// Build it
		$this->streams->cp->entry_form('tax_classes', 'zones', $mode = 'edit', $id, true, $extra);
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
		$this->streams->entries->delete_entry($id, 'tax_classes', 'zones');

		redirect('admin/zones/tax_classes');
	}
}

