<?php
/**
 * @version     5.0.0
 * @package     NAWALA FRAMEWORK
 * @subPackage  NFactory
 * @copyright   Copyright (C) 1997 - 2013 by devXive - research and development. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      devXive <support@devxive.com> - http://devxive.com
 */

defined('_JEXEC') or die;

class NFactory
{
	public function __construct()
	{
	}

	/*
	 * Global Checkin Method to check in an item for the current user
	 * return true if success, else return false
	 * $table without prefix
	 */
	public function checkIn($table, $id)
	{
		if(!$table && !$id && (int) $id) {
			return false;
		}

		$user = 0;
		$datetime = '0000-00-00 00:00:00';

		// Init database object.
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);

		// Set the fields
		$fields = array(
			'checked_out = ' . $db->quote($user) . '',
			'checked_out_time = ' . $db->quote($datetime) . '');

		$dbTable = '#__' . $table;

		$query
			->update($db->quoteName($dbTable))
			->set($fields)
			->where('id = ' . $db->quote($id) . '');

		$db->setQuery($query);

		// Try to store or get the error code for debugging
		try
		{
			$db->execute();
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	/*
	 * Global Checkout Method to check out an item for the current user based on users timezone
	 * return true if success, else return false
	 * $table without prefix, id must integer, datetime in sql format, user who checked out (int of the user db id)
	 */
	public function checkOut($table, $id, $datetime, $user)
	{
		if($user != 0 && (int) $user && $datetime && $user)
		{
			// Init database object.
			$db = JFactory::getDBO();
			$query = $db->getQuery(true);

			// Set the fields
			$fields = array(
				'checked_out = ' . $db->quote($user) . '',
				'checked_out_time = ' . $db->quote($datetime) . '');

			$dbTable = '#__' . $table;

			$query
				->update($db->quoteName($dbTable))
				->set($fields)
				->where('id = ' . $db->quote($id) . '');

			$db->setQuery($query);

			// Try to store or get the error code for debugging
			try
			{
				$db->execute();
				return true;
			} catch (Exception $e) {
				return false;
			}
		} else {
			return false;
		}
	}

	/*
	 * return the current date, based on the timezone, given either in the user or the system config object.
	 * @format	switch the format, sql datetime format, unix timestamp, date, datetime
	 * @value	default now, other formats not supportet at this time
	 * @mode	switch the mode (default: USER_UTC): SERVER_UTC, USER_UTC (USER_UTC with fallback to system, if the timezone is set to Global)
	 */
	public function getDate($format = 'UNIX', $value = 'now', $mode = 'USER_UTC')
	{
		// Get some system objects.
		$config = JFactory::getConfig();
		$user = JFactory::getUser();

		$date = JFactory::getDate($value, 'UTC');

		// Set the timezone
		switch ($mode)
		{
			case 'SERVER_UTC':
				// Convert a date to UTC based on the server timezone.
				$date->setTimezone(new DateTimeZone($config->get('offset')));
				break;

			case 'USER_UTC':
				// Convert a date to UTC based on the user timezone (Fallback, system config timezome, if user tz is set to global).
				$date->setTimezone(new DateTimeZone($user->getParam('timezone', $config->get('offset'))));
				break;
		}

		// Transform the date string
		switch ($format)
		{
			case 'MySQL':
				$value = $date->format('Y-m-d H:i:s', true, false);
				break;

			case 'UNIX':
				$value = strtotime($date->format('Y-m-d H:i:s', true, false));
				break;

			case 'TIME':
				$value = $date->format('H:i', true, false);
				break;

			case 'TIMES':
				$value = $date->format('H:i:s', true, false);
				break;

			case 'LC':
			case 'LC1':
			case 'JLC':
			case 'JLC1': // Wednesday, 12 June 2013 
				$value = $date->format('l, d F Y', true, false);
				break;

			case 'LC2':
			case 'JLC2': // Wednesday, 12 June 2013 15:20
				$value = $date->format('l, d F Y H:i', true, false);
				break;

			case 'LC3':
			case 'JLC3':
				$value = $date->format('d F Y', true, false); // 12 June 2013
				break;

			case 'DATE':
			case 'LC4':
			case 'JLC4':
				$value = $date->format('Y-m-d', true, false); // 2013-06-12
				break;
		}

		return $value;
	}

	/*
	 * Global Method to get a title by an id (Currently only usergroups and viewlevels)
	 * return the title if success else return $id
	 */
	public function getTitleById($type, $id, $table = false, $row = false)
	{
		$db = JFactory::getDbo();
		$query = $db->getQuery(true);

		if ($type == 'usergroup') {
			$query
				->select('title')
				->from('#__usergroups')
				->where('id = ' . $db->quote($id) . '');
		} else if ($type == 'viewlevel') {
			$query
				->select('title')
				->from('#__viewlevels')
				->where('id = ' . $db->quote($id) . '');
		} else if ($type == 'category') {
			$query
				->select('title')
				->from('#__categories')
				->where('id = ' . $db->quote($id) . '');
		} else if ($type == 'custom' && $table && $row) {
			$query
				->select($row)
				->from('#__' . $table . '')
				->where('id = ' . $db->quote($id) . '');
		} else {
			return $id;
		}

		$db->setQuery($query);

		if ($result = $db->loadResult()) {
			return $result;
		} else {
			return $id;
		}
	}

	/*
	 * Global Method to get authorised actions for the current user based on either the components global settings or the component / sections (as set in access.xml in admin) and an itemId.
	 *	- See @itemId desc below
	 *	So we can check against this object if the user can do the action or not
	 *	Simply use "if(NFactory::getPermissions('com_mycomponent')->core.create) { do something }
	 *
	 * @component		string		The name of the component we which to check the permissions for.
	 * @section		string		The name of the secion (component, category, special section from custom component, like tabapps in xiveirm).
	 * @sectionsRowId	int		The id of the item with its own acl and therefore its own assets entry in the #__assets table.
	 *					For XiveIRM i.e. it is the id of the tabapp config entry.
	 * @itemId		string		The table.id of the item itself. Used for check if edit.own is possible. If not it overrides the core.edit.own with "null" to get a clear object to work with!!!
	 *
	 * @return 		jobject	Returned JObject with all ACL informations (no viewing access level).
	 *
	 */
	public function getPermissions($component, $section = false, $sectionsRowId = 0, $item = 0)
	{
		$user = JFactory::getUser();
		$permissionsObject = new JObject;

		if (!$section && empty($sectionsRowId)) {
			$assetName = $component;
		} else {
			$assetName = $component . '.' . $section . '.' . (int) $sectionsRowId;
		}

		if(!$section) {
			$actions = JAccess::getActions($component);
		} else {
			$actions = JAccess::getActions($component, $section);
		}

		foreach ($actions as $action) {
			// Check if we have enough informations, to check the edit.own action. Override the action if condition is not set!
			if( $action->name == 'core.edit.own' && !empty($item) ) {
				$itemArray = explode('.', $item);
				$table = '#__' . $itemArray[0];

				$db = JFactory::getDbo();
				$query = $db->getQuery(true);

				$query
					->select('created_by')
					->from($db->quoteName($table))
					->where('id = ' . $db->quote($itemArray[1]) . '');

				$db->setQuery($query);

				$result = $db->loadResult();

				if($result != $user->id) {
					$canEditOwn = null;
				} else {
					$canEditOwn = $user->authorise($action->name, $assetName);
				}

				$permissionsObject->set($action->name, $canEditOwn);
			} else {
				$permissionsObject->set($action->name, $user->authorise($action->name, $assetName));
			}
		} // End foreach $actions

		return $permissionsObject;
	}
}