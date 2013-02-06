<?php
/**
* An example JApplicationWeb application built on the Joomla Platform.
*
* To run this example, copy or soft-link this folder to your web server tree.
 * example written by mqueme with code taken from joomla examples
*
* @package Joomla.Examples
* @copyright Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
* @license GNU General Public License version 2 or later; see LICENSE
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
require dirname(__FILE__).'/bootstrap.php';

// Set error handler to echo
JError::setErrorHandling(E_ERROR, 'echo');

/**
* An example JApplicationWeb application class.
*
* @package Joomla.Examples
* @since 11.3
*/
class PicasaPhotos extends JApplicationWeb
{
/**
* Overrides the parent doExecute method to run the web application.
*
* This method should include your custom code that runs the application.
*
* @return void
*
* @since 11.3
*/
public function getAuth(){


    if (!isset($auth)) {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.google.com/accounts/ClientLogin");
        $data = array('accountType' => 'GOOGLE',
                   'Email' => 'yourgmailaccount',
                   'Passwd' => 'pass',
                   'source'=>'PHI-cUrl-Example',
                   'service'=>'lh2');

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

        $data = curl_exec($ch);
        $auth = strstr($data, 'Auth=');


    }
    return $auth;
}

protected function doExecute()
{


$context = stream_context_create(array('https' => array('method' => 'GET')));


    //get auth from google
$auth = $this->getAuth();

// Open Picasa photo list. through curl
$ch = curl_init("http://picasaweb.google.com/data/feed/base/user/118179057367064112898/album/MquemeFotografia?imgmax=200");

$header[] = 'Authorization: GoogleLogin '.$auth;

curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);

$feed = curl_exec($ch);
curl_close($ch);
//Check if the feed could be opened.
    if (!$feed)
		{
			// Push the output into the document buffer.
			$this->document->setBuffer('Error: Failed to open stream.', array('type' => 'component', 'name' => 'main'));
			return false;
		}
		// Parse the XML feed.
		$reader = JFactory::getXML($feed, false);

		// Start an output buffer.
		$result = array();
        foreach ($reader->entry as $photo)
		{

                $temp = array();

                // get the photo and thumbnail information
                $media = $photo->children('http://search.yahoo.com/mrss/');

                // full image information
                $group_content = $media->group->content;
                $temp['full_url'] = $group_content->attributes()->{'url'};
                $temp['full_width'] = $group_content->attributes()->{'width'};
                $temp['full_height'] = $group_content->attributes()->{'height'};

                // thumbnail information, get the 3rd (=biggest) thumbnail version
                // change the [2] to [0] or [1] to get smaller thumbnails
                $group_thumbnail = $media->group->thumbnail[2];
                $temp['thumbnail_url'] = $group_thumbnail->attributes()->{'url'};
                $temp['thumbnail_width'] = $group_thumbnail->attributes()->{'width'};
                $temp['thumbnail_height'] = $group_thumbnail->attributes()->{'height'};

                $temp['title'] = $media->group_title[0];
                $result[] = $temp;

		}
        ob_start();

		// Iterate through the elements in the stream.

        foreach ($result as $r) {
            echo '<a href="'.$r['full_url'].'" title="'.$r['title'].'">
                  <img src="'.$r['thumbnail_url'].'" width="'.$r['thumbnail_width'].'" height="'.$r['thumbnail_height'].'" alt="'.$r['title'].'" />
                  </a>';
        };

		// Get the buffer output.
		$output = ob_get_clean();

		// Push the output into the document buffer.
		$this->document->setBuffer($output, array('type' => 'component', 'name' => 'main'));
}

/**
* Method to get the template name. This is needed for compatability with JApplication.
*
* @return string The theme name.
*
* @since 12.1
*/
public function getTemplate()
{
return $this->get('theme');
}

}

// Instantiate the application.
$application = JApplicationWeb::getInstance('PicasaPhotos');

// Initialise the application.
$application->initialise();

// Store the application.
JFactory::$application = $application;

// Execute the application.
$application->execute();
//echo 'PicasaPhotos';
