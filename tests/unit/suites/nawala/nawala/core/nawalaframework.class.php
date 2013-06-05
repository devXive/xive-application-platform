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

/**
 * Version information class for the Nawala Framework.
 */
final class NFramework
{
	// Product name.
	const PRODUCT = 'Nawala Framework';

	// Release version.
	const RELEASE = '13.5';

	// Maintenance version.
	const MAINTENANCE = '0';

	// Development STATUS.
	const STATUS = 'Alpha';

	// Build number.
	const BUILD = 0;

	// Code name.
	const CODE_NAME = 'Bagong Simula';

	// Release date.
	const RELEASE_DATE = '07-May-2013';

	// Release time.
	const RELEASE_TIME = '00:00';

	// Release timezone.
	const RELEASE_TIME_ZONE = 'GMT';

	// Copyright Notice.
	const COPYRIGHT = 'Copyright (C) 1997 - 2013 devXive - research and development. All rights reserved.';

	// Link text.
	const LINK_TEXT = '<a href="http://devxive.com/nawala">The Nawala Framework</a> is Free Software released under the GNU General Public License.';

	/**
	 * Compares two a "PHP standardized" version number against the current Nawala Framework version.
	 *
	 * @param   string  $minimum  The minimum version of the Nawala Framework which is compatible.
	 *
	 * @return  boolean  True if the version is compatible.
	 *
	 * @see     http://www.php.net/version_compare
	 */
	public static function isCompatible($minimum)
	{
		return (version_compare(self::getShortVersion(), $minimum, 'eq') == 1);
	}

	/**
	 * Gets a "PHP standardized" version string for the current Nawala Framework.
	 *
	 * @return  string  Version string.
	 */
	public static function getShortVersion()
	{
		return self::RELEASE . '.' . self::MAINTENANCE;
	}

	/**
	 * Gets a version string for the current Nawala Framework with all release information.
	 *
	 * @return  string  Complete version string.
	 */
	public static function getLongVersion()
	{
		return self::PRODUCT . ' ' . self::RELEASE . '.' . self::MAINTENANCE . ' ' . self::STATUS . ' [ ' . self::CODE_NAME . ' ] '
			. self::RELEASE_DATE . ' ' . self::RELEASE_TIME . ' ' . self::RELEASE_TIME_ZONE;
	}
}
