<?php

/**
 * mymessage actions.
 *
 * @package    campuscenter
 * @subpackage mymessage
 * @author     David Lin
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mymessageActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $this->getUser()->setAttribute('mySection', 'mymessage');
    
  }
}
