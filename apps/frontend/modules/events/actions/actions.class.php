<?php

/**
 * events actions.
 *
 * @package    campuscenter
 * @subpackage events
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class eventsActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  	
  	
  	$this->categories = Doctrine::getTable('Category')->createQuery('c')->where('c.module = ?', 'events')->execute();
  	$q = Doctrine::getTable('Listing')->getActiveListingsQuery ()->addWhere('l.module=?', 'events');
  	$this->pager = Doctrine::getTable('Listing')->getActiveListingsPager($request->getParameter('page', 1), $q);
    $this->listings = $this->pager->getResults();
    
  	return sfView::SUCCESS;
  }
  
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeCategory(sfWebRequest $request)
  {

  	$this->category = $this->getRoute()->getObject();
  	$this->pager = $this->category->getActiveListingsPager($request->getParameter('page', 1));
  	$this->listings = $this->pager->getResults();


    return sfView::SUCCESS;
  }
}
