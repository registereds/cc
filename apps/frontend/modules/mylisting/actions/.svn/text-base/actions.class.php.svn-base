<?php

/**
 * mylisting actions.
 *
 * @package    campuscenter
 * @subpackage mylisting
 * @author     David Lin
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mylistingActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {

        
        $this->getUser()->setAttribute('mySection', 'mylisting');

        $changeModule = $request->getParameter('m', '');
        if(in_array($changeModule, array(Listing::MODULE_MARKETPLACE, Listing::MODULE_EVENTS, Listing::MODULE_FORUM)) ){
            $this->getUser()->setAttribute('showModule', $changeModule, 'mylisting');
        }
        $changeStatus = $request->getParameter('s', '');
        if(in_array($changeModule, array(Listing::STATUS_ACTIVE, Listing::STATUS_INACTIVE, Listing::STATUS_DELETED)) ){
            $this->getUser()->setAttribute('showStatus', $changeStatus, 'mylisting');
        }

        $currentModule = $this->getUser()->getAttribute('showModule', 'marketplace', 'mylisting');
        $currentStatus = $this->getUser()->getAttribute('showStatus', 'active', 'mylisting');
            
        $currentPage = $request->getParameter('page', 1);
        

        
        $currentListings = array();
        $q = Doctrine_Query::create ()->from('Listing l')->addSelect('l.*')->leftJoin('l.Category c')->addSelect('c.*')->leftJoin('l.ListingComments lc')->addSelect('lc.*');
        $listings = Doctrine::getTable('Listing')->getByUserId($this->getUser()->getId(), $q);

        $sortedListings = array();

        foreach ($listings as $listing) {
            if ($currentStatus == $listing->getStatus() && $currentModule == $listing->getModule()) {
                $currentListings[] = $listing;
            }
            $sortedListings[$listing->getModule()][$listing->getStatus()][] = 1;
        }

        foreach ($sortedListings as $key => &$value) {
            ksort($value);
        }

        $this->listings = $sortedListings;
        $this->currentStatus = $currentStatus;
        $this->currentModule = $currentModule;


        $this->pager = new myArrayPager(null, sfConfig::get('app_category_listings_per_page'));
        $this->pager->setResultArray($currentListings);
        $this->pager->setPage($currentPage);
        $this->pager->init();




        return sfView::SUCCESS;
    }



    public function executeDelete(sfWebRequest $request) {
        $id = (int) $request->getParameter('id', 0);
        if ($id > 0) {
            $listing = Doctrine::getTable('Listing')->find($id);

            if ($listing && $listing->getUserId() == $this->getUser()->getId()) {


                $module = $listing->getModule();
                $status = $listing->getStatus();

                $listing->setDeletedAt(date('Y-m-d H:i:s'));
                $listing->save();

                
            }
        }
        $this->redirect('mylisting/index');
    }

    public function executeEdit(sfWebRequest $request) {
        $id = (int) $request->getParameter('id', 0);
        if ($id > 0) {
            $listing = Doctrine::getTable('Listing')->find($id);
            if ($listing && $listing->getUserId() == $this->getUser()->getId()) {
                $this->listing = $listing;
            }
        }

        if ($this->listing) {
            return sfView::SUCCESS;
        } else {
            $this->redirect('my/listings');
        }
    }

    public function executeSave(sfWebRequest $request) {

        $cancel = $request->getParameter('cancel', '');
        if ($cancel != '') {
            $this->redirect('my/listings');
        }


        $id = (int) $request->getParameter('id', 0);
        if ($id > 0) {
            $listing = Doctrine::getTable('Listing')->find($id);
            if ($listing && $listing->getUserId() == $this->getUser()->getId()) {
                $descitption = $request->getParameter('description', '');

                if ($descitption != '') {
                    $listing['description'] = $descitption;
                    $hasChange = false;
                    if ($listing->isModified()) {
                        $listing->save();
                        $hasChange = true;
                    }
                    $this->listing = $listing;

                    if ($hasChange) {
                        return sfView::SUCCESS;
                    } else {
                        return sfView::ALERT;
                    }
                }
            }
        }

        $this->forward404();
    }

}
