<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* Shipping Library */
class Shipping_utility
{
	
	private $CI;

	public function  __construct()
	{
		$this->CI =& get_instance();
	}


	// --------------------------------------------------------------------------

	/**
	 * Get all available drivers
	 *
	 * @access public
	 * @return array
	 */
	public function get_all()
	{
		
		$drivers = array();

		/* Scan directory for drivers */
		foreach(scandir(__DIR__.'/shipping') as $driver)
		{

			// No . or ..
			if($driver[0] != '.')
			{

				// Make sure the file exists
				if ( file_exists(__DIR__.'/shipping/'.$driver.'/'.$driver.'.php') )
				{
					$drivers[$driver] = 'Yes';
				}
			}
		}

		return $drivers;
	}

	// --------------------------------------------------------------------------

	/**
	 * Spawn a driver class
	 *
	 * @access public
	 * @return bool
	 */
	public function spawn($driver)
	{

		$file = __DIR__.'/shipping/'.$driver.'/'.$driver.'.php';
		
		// Does it exist?
		if ( ! is_file($file) ) return false;

		// Sweet, include the file
		include_once $file;

		// Now we need to talk to it
		return class_exists($driver) ? new $driver : false;
	}

	// --------------------------------------------------------------------------

	/**
	 * Install a driver
	 *
	 * @access public
	 * @return bool
	 */
	public function install($driver)
	{

		// Spawn it
		if ( ($class = $this->spawn($driver)) === false ) return false;

		return $class->install();
	}

	// --------------------------------------------------------------------------

	/**
	 * Uninstall a driver
	 *
	 * @access public
	 * @return bool
	 */
	public function uninstall($driver)
	{

		// Spawn it
		if ( ($class = $this->spawn($driver)) === false ) return false;

		return $class->uninstall();
	}

	// --------------------------------------------------------------------------
	
	/**
	 * Get the total weight of the cart
	 *
	 * @access public
	 * @return decimal
	 */
	public function get_cart_weight()
	{
		
		foreach ($this->cart['content'] as $item)
		{
			$item_weight	= $item['weight']*$item['quantity'];
			$order_weight	= $order_weight + $item_weight;
		}
		
		return $weight;
	}
	
	// --------------------------------------------------------------------------

	/**
	 * Get the total weight of the cart
	 *
	 * @access public
	 * @return decimal
	 */
	public function get_cart_price()
	{
		
		foreach ($this->cart['content'] as $item)
		{
			$item_price		= $item['price']*$item['quantity'];
			$order_price	= $order_price + $item_price;
		}
		
		return $price;
	}
}