<?php

/**
 * misc actions.
 *
 * @package    campuscenter
 * @subpackage misc
 * @author     David Lin
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class miscActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeTermsOfUse(sfWebRequest $request)
  {
        return sfView::SUCCESS;
  }
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executePrivacyPolicy(sfWebRequest $request)
  {
        return sfView::SUCCESS;
  }
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeError404(sfWebRequest $request)
  {
        return sfView::SUCCESS;
  }


 
}