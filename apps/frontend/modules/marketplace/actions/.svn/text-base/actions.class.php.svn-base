<?php

/**
 * marketplace actions.
 *
 * @package    campuscenter
 * @subpackage marketplace
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class marketplaceActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  	
        //forward to search if necessary
        $this->forwardIf($request->getGetParameter('q', '') != '', 'marketplace', 'searchModule');

  	$this->categories = Doctrine::getTable('Category')->createQuery('c')->where('c.module = ?', $this->getModuleName())->execute();
  	$q = Doctrine::getTable('Listing')->getActiveListingsQuery ()->addWhere('l.module=?', 'marketplace');
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
  	

        //forward to search if necessary
        $this->forwardIf($request->getGetParameter('q', '') != '', $this->getModuleName(), 'searchCategory');


  	$this->category = $this->getRoute()->getObject();
        $request->setParameter('category', $this->category);

  	$this->pager = $this->category->getActiveListingsPager($request->getParameter('page', 1));
  	$this->listings = $this->pager->getResults();
  	
  	
        return sfView::SUCCESS;
  }
  
 /**
  * Executes listing action
  *
  * @param sfRequest $request A request object
  */
  public function executeListing(sfWebRequest $request)
  {
  	$this->listing = $this->getRoute()->getObject();
     
        $request->setParameter('listing', $this->listing);
        $category = $this->listing->getCategory();
        $request->setParameter('category',$category);
	
  	//getting displayable elements
  	$params =  $this->getRoute()->getParameters();
  	$this->redirectUnless($this->listing->getCategorySlug() == $params['category_slug'] && 
  	$this->listing->getSlug() == $params['slug'], 
  	$this->listing->getURL());
  	$this->comments = $this->listing->getSortedComments();
  	
  	
  	//adding history cookie
  	$history = $request->getCookie('cc_history', '');
  	$history = $history==''?array():explode('|', $history);
  	$newHistory = array();
  	foreach($history as $listing){
  		if($listing != $this->listing->getId() && !in_array($listing, $newHistory)){
  			$newHistory[] = $listing;
  		}
  	}
  	$newHistory[] = $this->listing->getId();
  	while(count($newHistory) > 20){
  		array_shift($newHistory);
  	}
  	$this->getResponse()->setCookie('cc_history', implode('|', $newHistory), time() + 86400*30);

        //increase page view counter
  	if(!in_array($this->listing->getId(), $history)){
  		$this->listing->addViewCount();
  	}

        //increase listing tag weight
        $keyword = $this->getUser()->getFlash('keyword');
        if($keyword != ''){
           
            $this->listing->addKeywordIndex($keyword);
            $keyword = $this->getUser()->setFlash('keyword', $keyword);
        }

  	
    return sfView::SUCCESS;
  }

 /**
  * Executes search action
  *
  * @param sfRequest $request A request object
  */
  public function executeSearchModule(sfWebRequest $request)
  {
      
   

      $keyword = $request->getGetParameter('q','');

      if($keyword != ''){
        $request->setParameter('keyword',$keyword);
        $this->getUser()->setFlash('keyword', $keyword);
      }

      $page = $request->getGetParameter('page', 1);
      $q = Doctrine::getTable('Listing')->getActiveListingsQuery()->addWhere('module ="'.$this->getModuleName().'"');
   
      $this->pager = Doctrine::getTable('Listing')->getActiveListingsSearchPager($keyword, $page, $q);
      $this->listings = $this->pager->getResults();
      $this->categories = Doctrine::getTable('Category')->createQuery('c')->where('c.module = ?', $this->getModuleName())->execute();
      $this->categoryCounts = Doctrine::getTable('Listing')->getActiveListingsSearchCountGroupByCategory($keyword);
  }

  
 /**
  * Executes search action
  *
  * @param sfRequest $request A request object
  */
  public function executeSearchCategory(sfWebRequest $request)
  {
      $this->category = $this->getRoute()->getObject();
      $keyword = $request->getGetParameter('q','');

      if($keyword != ''){
        $request->setParameter('keyword',$keyword);
        $this->getUser()->setFlash('keyword', $keyword);
      }

      if(is_object($this->category)){
        $request->setParameter('category', $this->category);
      }
      
      $page = $request->getGetParameter('page', 1);
      
      $this->pager = $this->category->getActiveListingsSearchPager( $keyword, $page);
      $this->listings = $this->pager->getResults();
      $this->categories = Doctrine::getTable('Category')->createQuery('c')->where('c.module = ?', $this->getModuleName())->execute();
      $this->categoryCounts = Doctrine::getTable('Listing')->getActiveListingsSearchCountGroupByCategory($keyword);
 

  }
  
}

	

