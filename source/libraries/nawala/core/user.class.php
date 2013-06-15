<?php
/**
 * @version     3.3.0
 * @package     com_xiveirm
 * @copyright   Copyright (C) 1997 - 2013 by devXive - research and development. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      devXive <support@devxive.com> - http://devxive.com
 */

defined('_JEXEC') or die;

class NUser
{
	var $user;

	public function __construct($id = null)
	{
		if ($id == null) {
			self::$user = JFactory::getUser();
		} else {
			self::$user = JFactory::getUser($id);
		}
	}

	/*
	 * 
	 * 
	 * 
	 */
//	public function getUserName($type = 'name', $id = $this->user->id)
//	{
//		return JFactory::getUser($id)->$type;
//	}

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