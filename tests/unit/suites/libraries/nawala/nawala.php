<?php
/**
  * @info		$Id$ - $Revision$
  * @package		$Nawala.Framework $
  * @subpackage	Framework
  * @check		$Date$ || $Result: devXive AntiMal...OK, nothing found $
  * @author		$Author$ @ devXive - research and development <support@devxive.com>
  * @copyright	Copyright (C) 1997 - 2013 devXive - research and development (http://www.devxive.com)
  * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
  * @assetsLicense	devXive Proprietary Use License (http://www.devxive.com/license)
  */

// no direct access
defined('_NFWRA') or die;

// Set the Nawala Framework root path as a constant if necessary.
if (!defined('NPATH_FRAMEWORK'))
{
	define('NPATH_FRAMEWORK', __DIR__ . '/nawala');
}

// Define legacy directory separator as a constant if not exist
if(!defined('DS')) {
	define('DS', DIRECTORY_SEPARATOR);
}

// Init
require_once (NPATH_FRAMEWORK . '/init.php');

