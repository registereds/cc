<?php

/**
 * forum actions.
 *
 * @package    campuscenter
 * @subpackage forum
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class forumActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->categories = Doctrine::getTable('Category')->createQuery('c')->where('c.module = ?', 'forum')->execute();
    
    return sfView::SUCCESS;
  }	
	
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeCategory(sfWebRequest $request)
  {

        //forward to search if necessary
        $this->forwardIf($request->getGetParameter('q', '') != '', $this->getModuleName(), 'searchCategory');

  	$this->category = $this->getRoute()->getObject();
        $request->setParameter('category', $this->category);

  	$this->pager = $this->category->getActiveListingsPager($request->getParameter('page', 1));
  	$this->listings = $this->pager->getResults();


        return sfView::SUCCESS;

         
  }
}
