<?php
/**
 * An example JApplicationWeb application built on the Joomla Platform.
 *
 * To run this example, copy or soft-link this folder to your web server tree.
 *
 * @package    Joomla.Examples
 * @copyright  Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

// We are a valid Joomla entry point.
define('_JEXEC', 1);

// Setup the base path related constant.
define('JPATH_BASE', dirname(__FILE__));
define('JPATH_SITE', JPATH_BASE);
define('JPATH_THEMES', JPATH_BASE.'/themes');

// Increase error reporting to that any errors are displayed.
// Note, you would not use these settings in production.
error_reporting(E_ALL);
ini_set('display_errors', true);

// Bootstrap the application.
require dirname(dirname(dirname(__FILE__))).'/bootstrap.php';

// Set error handler to echo
JError::setErrorHandling(E_ERROR, 'echo');

/**
* An example JApplicationWeb application class.
*
* @package  Joomla.Examples
* @since    11.3
*/
class FlickrFeed extends JApplicationWeb
{
	/**
	 * Overrides the parent doExecute method to run the web application.
	 *
	 * This method should include your custom code that runs the application.
	 *
	 * @return  void
	 *
	 * @since   11.3
	 */
	protected function doExecute()
	{
		// Create a stream context.
		$context = stream_context_create(array('http' => array('method' => 'GET')));

		// Open Flickr Feed as a Stream.
		$feed = @file_get_contents('http://api.flickr.com/services/feeds/photos_public.gne', false, $context);

		// Check if the feed could be opened.
		if (!$feed)
		{
			// Push the output into the document buffer.
			$this->document->setBuffer('Error: Failed to open stream.', array('type' => 'component', 'name' => 'main'));
			return false;
		}

		// Parse the XML feed.
		$reader = JFactory::getXML($feed, false);

		// Start an output buffer.
		ob_start();

		// Iterate through the elements in the stream.
		foreach ($reader->entry as $entry)
		{
			echo '<div class="cell">';
			echo $entry->content->data();
			echo '</div>';
		}

		// Get the buffer output.
		$output = ob_get_clean();

		// Push the output into the document buffer.
		$this->document->setBuffer($output, array('type' => 'component', 'name' => 'main'));
	}

	/**
	 * Method to get the template name. This is needed for compatability with JApplication.
	 *
	 * @return  string  The theme name.
	 *
	 * @since   12.1
	 */
	public function getTemplate()
	{
		return $this->get('theme');
	}
}

// Instantiate the application.
$application = JApplicationWeb::getInstance('FlickrFeed');

// Initialise the application.
$application->initialise();

// Store the application.
JFactory::$application = $application;

// Execute the application.
$application->execute();
