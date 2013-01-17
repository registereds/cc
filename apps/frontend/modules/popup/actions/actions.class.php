<?php

/**
 * popup actions.
 *
 * @package    campuscenter
 * @subpackage popup
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class popupActions extends sfActions
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
  * Executes login action
  *
  * @param sfRequest $request A request object
  */
  public function executeSignInFormFeedback(sfWebRequest $request)
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
  public function executeRegisterForm(sfWebRequest $request)
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
