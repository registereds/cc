<?php

/**
 * home actions.
 *
 * @package    campuscenter
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  	
  	$this->pager = Doctrine::getTable('Listing')->getActiveListingsPager($request->getParameter('page', 1));
  	$this->listings = $this->pager->getResults();
    //$this->forward('default', 'module');
    return sfView::SUCCESS;
  }
}
