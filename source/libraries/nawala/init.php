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

// Init NLoader.Class
require_once (realpath(dirname(__FILE__)) . '/core/nloader.class.php');

/**
 * @param  string $path the nawala path to the class to import
 *
 * @return void
 */
function nawala_import($path, $config)
{
	return NLoader::import($path, $config);
}

// Import the framework version class if necessary.
if (!class_exists('NFramework'))
{
	nawala_import('core.nawalaframework', 'once');
}