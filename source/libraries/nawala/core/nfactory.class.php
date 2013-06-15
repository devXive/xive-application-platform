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
	 * Global Method to get an array of options. Used for select lists, radio and checkbox sets
	 * return array if success, else return false
	 * $table without prefix, option key, client id (return always 0 because 0 is used as global)
	 */
	public function getOptionArray($table, $sl_key, $client_id = 0)
	{
		if(!$table && !$sl_key && (int) $client_id) {
			return false;
		}

		// Init database object.
		$db = JFactory::getDBO();
		$query = $db->getQuery(true);

		$dbTable = '#__' . $table;
		$global_id = 0;
		$key = $sl_key . '.%';

		$query
			->select(array('client_id', 'sl_value', 'sl_string'))
			->from($db->quoteName($dbTable))
			->where('sl_key LIKE ' . $db->quote($key) . '')
			->where('client_id = ' . $db->quote($global_id) . ' OR client_id = ' . $db->quote($client_id) . '')
			->order('ordering ASC');

		$db->setQuery($query);

		// Try to get or return false
		try
		{
			$results = $db->loadObjectList();

			$superglobal = new stdClass;
			$client = array();
			$global = array();

			foreach ($results as $result) {
				if($result->client_id != 0) {
					$client[$result->sl_value] = $result->sl_string;
				} else {
					$global[$result->sl_value] = $result->sl_string;
				}
			}

			$superglobal->client = $client;
			$superglobal->global = $global;

			return $superglobal;
		} catch (Exception $e) {
			return false;
		}
	}
}