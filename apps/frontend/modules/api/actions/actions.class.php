<?php

/**
 * api actions.
 *
 * @package    campuscenter
 * @subpackage api
 * @author     David Lin
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class apiActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */

  public function executeLocations(sfWebRequest $request)
  {
      sfConfig::set('sf_web_debug', false);

      $q = trim($request->getParameter('q', ''));
      $limit = trim($request->getParameter('limit', 20));

      $query = Doctrine::getTable('location')->createQuery('l')->limit($limit);

      $validQuery = true;
      
      if(preg_match('/^\d{1,4}$/', $q)){
         $q = addslashes($q);
         $query = $query->where("pcode LIKE \"$q%\"");
        
      }else if (preg_match('/^[a-z ]+$/i', $q)) {
         $q = addslashes($q);
         $query = $query->where("locality LIKE \"$q%\"");
         
      }else if(preg_match('/^([a-z ]+)(\d+)$/i', $q, $match)){
         $sMatch = addslashes($match[1]);
         $pMatch = addslashes($match[2]);
         $query = $query->where("locality LIKE \"$sMatch\"")->where("pcode LIKE \"$pMatch%\"");
      }else if(preg_match('/^(\d+)([a-z ]+)$/i', $q, $match)){
         $pMatch = addslashes($match[1]);
         $sMatch = addslashes($match[2]);
         $query = $query->where("locality LIKE \"$sMatch%\"")->where("pcode LIKE \"$pMatch\"");
         
      }else{
          $validQuery = false;
      }

      $txt = '';
      if($validQuery){
      $res = $query->execute();

          foreach($res as $r){
              $txt .= $r['locality'].', '.$r['state'].' '.$r['pcode']. "\n";
          }
      }
      
      return $this->renderText($txt);
  }

  public function executeCampuses(sfWebRequest $request)
  {
      sfConfig::set('sf_web_debug', false);
      $q = addslashes( trim($request->getParameter('q', '')));
      $limit = trim($request->getParameter('limit', 20));

      $query = Doctrine::getTable('campus')->createQuery('c')->limit($limit);
    
      $query = $query->where("name LIKE \"%$q%\"")->orWhere("abbv LIKE \"%$q%\"");

      $txt = '';
      
      $res = $query->execute();

      foreach($res as $r){
          $txt .= $r['name']. "\n";
      }
      
      return $this->renderText($txt);
  }


}
