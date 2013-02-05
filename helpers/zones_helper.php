<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Make slug
 */
if(!function_exists('slugify'))
{
	function slugify($string)
	{	
		$string = trim($string);
		$string = strtolower($string);
		$string = preg_replace('/[\s-]+/', '-', $string);
		$string = preg_replace("/[^0-9a-zA-Z-]/", '', $string);
		
		return $string;
	}
}

/**
 * Create a random hash string based on microtime
 *
 * @author 	AI Web Systems, Inc.
 * @access 	public
 * @param 	int $length
 * @return 	string
*/
if(!function_exists('rand_string'))
{
	function rand_string($length = 10)
	{
		$chars = 'ABCDEFGHKLMNOPQRSTWXYZabcdefghjkmnpqrstwxyz';
		$max = strlen($chars)-1;
		$string = '';
		mt_srand((double)microtime() * 1000000);
		while (strlen($string) < $length)
		{
			$string .= $chars{mt_rand(0, $max)};
		}
		return $string;
	}
}

/**
 * Sort assoc array USORT callback
 *
 * @author 	AI Web Systems, Inc.
 * @access 	public
 * @param 	mixed $a
 * @param 	mixed $b
 * @return 	mixed
*/
if(!function_exists('sort_helper'))
{
	function sort_helper($a, $b)
	{
		$a = (array) $a;
		$b = (array) $b;

		return $a['start'] - $b['start'];
	}
}

/**
 * Change the layout of the page per the Layout ID passed
 *
 * @author 	AI Web Systems, Inc.
 * @access 	public
 * @param 	int $id
 * @return 	void
*/
if(!function_exists('change_layout'))
{
	function change_layout($id)
	{

		if ( empty($id) ) return false;

		// Load goodness
		$CI = &get_instance();
		$CI->load->model('pages/page_layouts_m');

		// Wrap the page with a page layout, otherwise use the default 'Home' layout
		if ( ! $layout = $CI->page_layouts_m->get($id))
		{
			// Some pillock deleted the page layout, use the default and pray to god they didnt delete that too
			$layout = $CI->page_layouts_m->get(1);
		}

		// If a Page Layout has a Theme Layout that exists, use it
		if ( ! empty($layout->theme_layout) AND $CI->template->layout_exists($layout->theme_layout)
			// But Allow that you use layout files of you theme folder without override the defined by you in your control panel
			AND ($CI->template->layout_is('default.html') OR $layout->theme_layout !== 'default.html')
		)
		{
			$CI->template->set_layout($layout->theme_layout);
		}
	}
}