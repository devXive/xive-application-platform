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

/**
 * Version information class for the XiveApplication Platform.
 *
 * @package  XiveApplication.Platform
 * @since    1.0
 */
final class XAPlatform
{
	// Product name.
	const PRODUCT = 'Xive Application Platform';

	// Release version.
	const RELEASE = '1.0';

	// Maintenance version.
	const MAINTENANCE = '0';

	// Development STATUS.
	const STATUS = 'Alpha';

	// Build number.
	const BUILD = 0;

	// Code name.
	const CODE_NAME = 'Bagong Simula';

	// Release date.
	const RELEASE_DATE = '07-Mar-2013';

	// Release time.
	const RELEASE_TIME = '00:00';

	// Release timezone.
	const RELEASE_TIME_ZONE = 'GMT';

	// Copyright Notice.
	const COPYRIGHT = 'Copyright (C) 1997 - 2013 devXive - research and development. All rights reserved.';

	// Link text.
	const LINK_TEXT = '<a href="http://devxive.com/xap">The Xive Application Platform</a> is Free Software released under the GNU General Public License.';

	/**
	 * Compares two a "PHP standardized" version number against the current Joomla Platform version.
	 *
	 * @param   string  $minimum  The minimum version of the Joomla Platform which is compatible.
	 *
	 * @return  boolean  True if the version is compatible.
	 *
	 * @see     http://www.php.net/version_compare
	 * @since   11.1
	 */
	public static function isCompatible($minimum)
	{
		return (version_compare(self::getShortVersion(), $minimum, 'eq') == 1);
	}

	/**
	 * Gets a "PHP standardized" version string for the current Joomla Platform.
	 *
	 * @return  string  Version string.
	 *
	 * @since   11.1
	 */
	public static function getShortVersion()
	{
		return self::RELEASE . '.' . self::MAINTENANCE;
	}

	/**
	 * Gets a version string for the current Joomla Platform with all release information.
	 *
	 * @return  string  Complete version string.
	 *
	 * @since   11.1
	 */
	public static function getLongVersion()
	{
		return self::PRODUCT . ' ' . self::RELEASE . '.' . self::MAINTENANCE . ' ' . self::STATUS . ' [ ' . self::CODE_NAME . ' ] '
			. self::RELEASE_DATE . ' ' . self::RELEASE_TIME . ' ' . self::RELEASE_TIME_ZONE;
	}
}
