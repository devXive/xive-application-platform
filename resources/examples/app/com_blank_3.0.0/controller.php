<?php
defined('_JEXEC') or die;

jimport('joomla.application.component.controller');

class BlankComponentController extends JControllerLegacy
{

	public function display($cachable = false, $urlparams = false)
	{
		JRequest::setVar('view','default'); // force it to be the search view

		return parent::display($cachable, $urlparams);
	}

}
