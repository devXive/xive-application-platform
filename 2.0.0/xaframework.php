<?php
/**
 * @version SVN: $Id: builder.php 469 2011-07-29 19:03:30Z elkuku $
 * @package    Bootstrap
 * @subpackage Base
 * @author     OSTree Team {@link http://www.ostree.org}
 * @author     Created on 16-Jan-2012
 * @license    GNU/GPL
 */

//-- No direct access
defined('_JEXEC') || die('=;)');

jimport('joomla.plugin.plugin');

/**
 * System Plugin.
 *
 * @package    Bootstrap
 * @subpackage Plugin
 */
class plgSystemXaframework extends JPlugin
{
    /**
     * Constructor
     *
     * @param object $subject The object to observe
     * @param array $config  An array that holds the plugin configuration
     */
    public function __construct(& $subject, $config)
    {
        parent::__construct($subject, $config);
    }

    public function onBeforeRender()
    {
        $app = JFactory::getApplication();

        $onlyFrontside = $this->params->get("onlyFrontside", TRUE);

        //ignore admin
        if ($onlyFrontside && $app->isAdmin()) {
            return true;
        }
        $doc = JFactory::getDocument();

        $onlyHTML = $this->params->get("onlyHTML", TRUE);
        // ignore non html
        if ($onlyHTML && $doc->getType() != 'html') {
            return true;
        }
        // ignore modal pages or other incomplete pages
        $notModal = $this->params->get("notModal", TRUE);
        $nogo = array('component', 'raw');
        if ($notModal && in_array(JRequest::getString('tmpl'), $nogo)) {
            return true;
        }
        $loadCSS = $this->params->get("loadCSS", TRUE);
        if ($loadCSS) {
            $doc->addStyleSheet(JURI::root(true) . '/media/xaframework/bootstrap/css/bootstrap.css');
        }
    }
	
    public function onAfterRender()
    {
		$app = JFactory::getApplication();
		
		$onlyFrontside = $this->params->get("onlyFrontside", TRUE);
		
		//ignore admin
		if ($onlyFrontside && $app->isAdmin()) {
			return true;
		}
		$doc = JFactory::getDocument();
		
		$onlyHTML = $this->params->get("onlyHTML", TRUE);
		// ignore non html
		if ($onlyHTML && $doc->getType() != 'html') {
			return true;
		}
        // ignore modal pages or other incomplete pages
        $notModal = $this->params->get("notModal", TRUE);
        $nogo = array('component', 'raw');
        if ($notModal && in_array(JRequest::getString('tmpl'), $nogo)) {
            return true;
        }
        $loadCSS = $this->params->get("loadCSS", TRUE);
        if ($loadCSS) {
            $doc->addStyleSheet(JURI::root(true) . '/media/xaframework/bootstrap/css/bootstrap-responsive.css');
        }
        $loadJS = $this->params->get("loadJS", TRUE);
        if ($loadJS) {
            $loadJQuery = $this->params->get("loadJQuery", TRUE);
            if ($loadJQuery) {
                $jQueryFromLocal = $this->params->get("jQueryFromLocal", TRUE);
                if ($jQueryFromLocal) {
                    $doc->addScript(JURI::root(true) . '/media/xaframework/jquery/jquery-1.7.2.min.js');
                }else{
                    $doc->addScript('https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
                }
            }
//            $doc->addScript(JURI::root(true) . '/media/xaframework/bootstrap/js/bootstrap.min.js'); // causes errors and i dont have found anything where this is included?!
            $doc->addScript(JURI::root(true) . '/media/xaframework/bootstrap/js/bootstrap-transition.js');
			$doc->addScript(JURI::root(true) . '/media/xaframework/bootstrap/js/bootstrap-alert.js');
			$doc->addScript(JURI::root(true) . '/media/xaframework/bootstrap/js/bootstrap-modal.js');
			$doc->addScript(JURI::root(true) . '/media/xaframework/bootstrap/js/bootstrap-dropdown.js');
			$doc->addScript(JURI::root(true) . '/media/xaframework/bootstrap/js/bootstrap-scrollspy.js');
			$doc->addScript(JURI::root(true) . '/media/xaframework/bootstrap/js/bootstrap-tab.js');
			$doc->addScript(JURI::root(true) . '/media/xaframework/bootstrap/js/bootstrap-tooltip.js');
			$doc->addScript(JURI::root(true) . '/media/xaframework/bootstrap/js/bootstrap-popover.js');
			$doc->addScript(JURI::root(true) . '/media/xaframework/bootstrap/js/bootstrap-button.js');
			$doc->addScript(JURI::root(true) . '/media/xaframework/bootstrap/js/bootstrap-collapse.js');
			$doc->addScript(JURI::root(true) . '/media/xaframework/bootstrap/js/bootstrap-carousel.js');
			$doc->addScript(JURI::root(true) . '/media/xaframework/bootstrap/js/bootstrap-typehead.js');
        }
        $loadGoogleCodePrettify = $this->params->get("loadGoogleCodePrettify", TRUE);
        if ($loadGoogleCodePrettify) {
			$doc->addStyleSheet(JURI::root(true) . '/media/xaframework/google/prettify.css');
			$doc->addScript(JURI::root(true) . '/media/xaframework/google/prettify.js');
        }
	}
}
