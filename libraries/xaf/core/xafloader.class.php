<?php
/**
  * @info		$Id$ - $Revision$
  * @package		$XiveApplication.Platform $
  * @subpackage	Framework
  * @check		$Date$ || $Result: devXive AntiMal...OK, no malware found $
  * @author		$Author$ @ devXive - research and development
  * @copyright	Copyright (C) 1997 - 2013 devXive - research and development (http://www.devxive.com)
  * @notes		XAF uses the Gantry Framework, (C) by RocketTheme, LLC (http://www.gantry-framework.com)
  * @dependency	XAP uses the Joomla! Platform, (C) by Open Source Matters (http://api.joomla.org)
  * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
  * @assetsLicense	devXive Proprietary Use License (http://www.devxive.com/license)
  */

defined('_XAPRA') or die();

class XAFLoader
{
	/**
	 * Loads a class from specified directories.
	 *
	 * @param string $filepath  Split the class name and path to look for ( dot notation ).
	 * @param string $config    'once' = include_once, else include
	 *
	 * @return void
	 */
	public static function import($filePath, $config = null)
	{
		static $paths, $base;

		if (!isset($paths)) {
			$paths = array();
		}

		if (!isset($base)) {
			$base = realpath(dirname(__FILE__) . '/..');
		}

		if (!isset($paths[$filePath])) {
			$parts            = explode('.', $filePath);
			$classname        = array_pop($parts);
			$path             = str_replace('.', '/', $filePath);
			if ($config == 'once') {
				$rs        = include_once($base . '/' . $path . '.class.php');
			} else {
				$rs        = include($base . '/' . $path . '.class.php');
			}
			$paths[$filePath] = $rs;
		}
		return $paths[$filePath];
	}
}