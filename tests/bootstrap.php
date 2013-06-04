<?php
/**
 * Unit test runner bootstrap file for the Xive Application Platform.
 *
 * @copyright  Copyright (C) 1997 - 2013 devXive - reseach and development. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 * @link       http://www.phpunit.de/manual/current/en/installation.html
 */

$loader = __DIR__ . '/../vendor/autoload.php';

// local testing
if (file_exists(__DIR__ . '/../../../../vendor/autoload.php')) {
	$loader = __DIR__ . '/../../../../vendor/autoload.php';
}

if (!$loader = @include($loader)) {
	echo <<<EOM
	You must set up the project dependencies by running the following commands:

	curl -s http://getcomposer.org/installer | php
	php composer.phar install

	EOM;

	exit(1);
}

$loader->add('BitTorrent\Announcer', __DIR__);