<?php

/**
 * pop actions.
 *
 * @package    campuscenter
 * @subpackage pop
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class popActions extends sfActions
{
 /**
  * Executes login action
  *
  * @param sfRequest $request A request object
  */
  public function executeSignInForm(sfWebRequest $request)
  {
    	return sfview::SUCCESS;
  }
 /**
  * Executes tellafriend action
  *
  * @param sfRequest $request A request object
  */
  public function executeTellafriendForm(sfWebRequest $request)
  {
    	return sfview::SUCCESS;
  }
 /**
  * Executes pass recovery
  *
  * @param sfRequest $request A request object
  */
  public function executePassResetForm(sfWebRequest $request)
  {
    	return sfview::SUCCESS;
  }
 /**
  * Executes pass recovery
  *
  * @param sfRequest $request A request object
  */
  public function executePassResetFormFeedback(sfWebRequest $request)
  {
        
    	return sfview::SUCCESS;
  }
 /**
  * Executes pass recovery
  *
  * @param sfRequest $request A request object
  */
  public function executePassResetLinkForm(sfWebRequest $request)
  {
    	return sfview::SUCCESS;
  }

  
 /**
  * Executes pass recovery
  *
  * @param sfRequest $request A request object
  */
  public function executeRegisterForm(sfWebRequest $request)
  {
    	return sfview::SUCCESS;
  }
 /**
  * Executes change local
  *
  * @param sfRequest $request A request object
  */
  public function executeChangeLocal(sfWebRequest $request)
  {
    	return sfview::SUCCESS;
  }
  
 /**
  * Executes pass recovery
  *
  * @param sfRequest $request A request object
  */
  public function executeReportInappropriateForm(sfWebRequest $request)
  {
    	return sfview::SUCCESS;
  }
}
