<?php
/**
 * @version     3.3.0
 * @package     com_xiveirm
 * @copyright   Copyright (C) 1997 - 2013 by devXive - research and development. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      devXive <support@devxive.com> - http://devxive.com
 */

defined('_JEXEC') or die;

class NItem
{
	
	
	public function __construct()
	{
		self::$whatever = 123;
		echo self::$whatever;
	}

	/*
	 * 
	 * 
	 * 
	 */
	public function getItem()
	{
		$result = 'get Something';
		return $result;
	}

	/*
	 * 
	 * 
	 * 
	 */
	public function setItem()
	{
		$result = 'set Something';
		return $result;
	}
}