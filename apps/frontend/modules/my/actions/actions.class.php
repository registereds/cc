<?php

/**
 * my actions.
 *
 * @package    campuscenter
 * @subpackage my
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class myActions extends sfActions
{

 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $currentSection = $this->getUser()->getAttribute('mySection', 'mylisting');
    
    $this->forward($currentSection, 'index');
  }

}
