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

// set for no direct access functionality in applications (XAP Restricted Access)
define('_XAPRA', 1);

// Set the platform root path as a constant if necessary.
if (!defined('XPATH_PLATFORM'))
{
	define('XPATH_PLATFORM', __DIR__);
}

// Define legacy directory separator as a constant if not exist
if(!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

// Import the platform version library if necessary.
if (!class_exists('XAPlatform'))
{
	require_once XPATH_PLATFORM . '/xplatform.php';
}

// Import the platform version library if necessary.
if (!class_exists('JPlatform'))
{
	// File for the Joomla Platform
	require_once XPATH_PLATFORM . '/joomla.php';
	
	// file for the Joomla Platform [with legacy libraries]
	// require_once XPATH_PLATFORM . '/joomla.legacy.php';
}

// Import the xive-application-framework if necessary.
if (!class_exists('XAPlatform'))
{
	require_once XPATH_PLATFORM . DS . '/xaf.php';
}

