<?php
/**
 * @package     XAP.Libraries
 * @subpackage  Version
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('_JEXEC') or die;

/**
 * Version information class for the MOOTOMBO! iWMS.
 *
 * @package     XAP.Libraries
 * @subpackage  Version
 * @since       1.0
 */
final class JVersion
{
	/** @var  string  Product name. */
	public $PRODUCT = 'MOOTOMBO! iWMS';

	/** @var  string  Release version. */
	public $RELEASE = '3.1';

	/** @var  string  Maintenance version. */
	public $DEV_LEVEL = '6';

	/** @var  string  Development STATUS. */
	public $DEV_STATUS = 'Beta';

	/** @var  string  Build number. */
	public $BUILD = '';

	/** @var  string  Code name. */
	public $CODENAME = 'Pana Pana';

	/** @var  string  Release date. */
	public $RELDATE = '02-August-2013';

	/** @var  string  Release time. */
	public $RELTIME = '21:00';

	/** @var  string  Release timezone. */
	public $RELTZ = 'GMT';

	/** @var  string  Copyright Notice. */
	public $COPYRIGHT = 'Copyright (C) 1997 - 2013 devXive - research and development. All rights reserved.';

	/** @var  string  Link text. */
	public $URL = '<a href="http://mootombo.net">MOOTOMBO! iWMS</a> is Free Software released under the GNU General Public License.';

	/**
	 * Compares two a "PHP standardized" version number against the current MOOTOMBO! version.
	 *
	 * @param   string  $minimum  The minimum version of the MOOTOMBO! which is compatible.
	 *
	 * @return  bool    True if the version is compatible.
	 *
	 * @see     http://www.php.net/version_compare
	 * @since   1.0
	 */
	public function isCompatible($minimum)
	{
		return version_compare(JVERSION, $minimum, 'ge');
	}

	/**
	 * Method to get the help file version.
	 *
	 * @return  string  Version suffix for help files.
	 *
	 * @since   1.0
	 */
	public function getHelpVersion()
	{
		return '.' . str_replace('.', '', $this->RELEASE);
	}

	/**
	 * Gets a "PHP standardized" version string for the current MOOTOMBO!.
	 *
	 * @return  string  Version string.
	 *
	 * @since   1.5
	 */
	public function getShortVersion()
	{
		return $this->RELEASE . '.' . $this->DEV_LEVEL;
	}

	/**
	 * Gets a version string for the current MOOTOMBO! with all release information.
	 *
	 * @return  string  Complete version string.
	 *
	 * @since   1.5
	 */
	public function getLongVersion()
	{
		return $this->PRODUCT . ' ' . $this->RELEASE . '.' . $this->DEV_LEVEL . ' '
				. $this->DEV_STATUS . ' [ ' . $this->CODENAME . ' ] ' . $this->RELDATE . ' '
				. $this->RELTIME . ' ' . $this->RELTZ;
	}

	/**
	 * Returns the user agent.
	 *
	 * @param   string  $component    Name of the component.
	 * @param   bool    $mask         Mask as Mozilla/5.0 or not.
	 * @param   bool    $add_version  Add version afterwards to component.
	 *
	 * @return  string  User Agent.
	 *
	 * @since   1.0
	 */
	public function getUserAgent($component = null, $mask = false, $add_version = true)
	{
		if ($component === null)
		{
			$component = 'Framework';
		}

		if ($add_version)
		{
			$component .= '/' . $this->RELEASE;
		}

		// If masked pretend to look like Mozilla 5.0 but still identify ourselves.
		if ($mask)
		{
			return 'Mozilla/5.0 ' . $this->PRODUCT . '/' . $this->RELEASE . '.' . $this->DEV_LEVEL . ($component ? ' ' . $component : '');
		}
		else
		{
			return $this->PRODUCT . '/' . $this->RELEASE . '.' . $this->DEV_LEVEL . ($component ? ' ' . $component : '');
		}
	}
}
