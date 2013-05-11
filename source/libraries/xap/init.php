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

// Init XAPLoader.Class
require_once (realpath(dirname(__FILE__)) . '/core/xaploader.class.php');

/**
 * @param  string $path the gantry path to the class to import
 *
 * @return void
 */
function xap_import($path, $config)
{
	return XAPLoader::import($path, $config);
}

// Import the platform version class if necessary.
if (!class_exists('XAPlatform'))
{
	xap_import('core.xaplatform', 'once');
}