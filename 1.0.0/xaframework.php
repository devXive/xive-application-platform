<?php
/**
 * The main file of the Xive Application Framework - System Plugin
 *
 * @package     True Typography
 * @version     1.0.0 beta
 *
 * @author      Giant Leap Lab <hello@giantleaplab.com>. Based on PHP Typography http://kingdesk.com/projects/php-typography/
 * @link        http://www.giantleaplab.com
 * @copyright   Copyright © 2011 Giant Leap Lab. All Rights Reserved
 * @license     http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

// No direct access
defined( '_JEXEC' ) or die();

// Import library dependencies
jimport( 'joomla.plugin.plugin' );

class plgSystemXaFramework extends JPlugin
{
	function __construct( &$subject, $config ){
        
		parent::__construct( $subject, $config );
	}
	
	function onBeforeRender(){
		
		$document =& JFactory::getDocument();
		
		// activate phppattern
		if($this->params->get('xaf_phppattern', 'no') == 'yes' ){
			$xaf_pattern = "1";
		}

		// Include media stylesheets
		if($this->params->get('xaf_stylesheet', 'yes') == 'yes' ){
		
			$document->addStyleSheet( JURI::base(true) . '/media/xaframework/css/master.css');
		}
		
		// Include stylesheets
		if($this->params->get('xaf_system_stylesheet', 'yes') == 'yes' ){
		
			$document->addStyleSheet( JURI::base(true) . '/plugins/system/xaframework/css/xaframework.css');
		}
		
		// Include JavaScript
		if($this->params->get('xaf_external_link_operator', 'no') == 'yes' ){
			
			JHTML::_('behavior.framework', true);
			$document->addScript( JURI::base(true) . '/plugins/system/xaframework/js/xaframework.js' );
		}
	}
    
	/**
	 * Parse the full page and make necessary fixes
	*/
    function onAfterRender(){
        
	$document =& JFactory::getDocument();
	$app = JFactory::getApplication();
	$docType = $document->getType();
        
		// activate phppattern
		if($this->params->get('xaf_phppattern', 'no') == 'yes' ){
			$xaf_pattern = "1";
		}
		if($xaf_pattern == "1"){
		
			// Ignore admin panel
			if( !$app->isSite() ) return;
	
			// Ignore PDF files
			if ( $docType == 'pdf' ) return;        
			
			// Include PHP Typographer
			require_once(dirname(__FILE__).DS.'helper.php');
			
			// Get a typograpy object and the body code
			$typography = new xaFrameworkHelper();
			$html = JResponse::getBody();
	
			// Set language
			$config = &JFactory::getConfig();
			$language = $config->getValue('language');
			$typography->set_hyphenation_language($language);
			$languageCode = explode('-', $language);
			
			if(isset($languageCode[0])){
			
				$languageCode = $languageCode[0];
				$typography->set_smart_quotes_language($languageCode);
				$typography->set_smart_numbers_language($languageCode);
			}
			
			// Set lists of patterns and replacements
			$patterns = preg_split("/,|(\r?\n)/", $this->params->get('xaf_custom_replacements_patterns'));
			$replacements = preg_split("/,|(\r?\n)/", $this->params->get('xaf_custom_replacements_replacements'));
			$typography->set_patterns_and_replacements($patterns, $replacements);
			
			// Process HTML code
			$html = $docType == 'feed' ? $typography->process_feed($html) : $typography->process($html);;
			JResponse::setBody( $html );
		}
	}
}