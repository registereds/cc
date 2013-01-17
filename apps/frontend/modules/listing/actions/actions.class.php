<?php

/**
 * listing actions.
 *
 * @package    campuscenter
 * @subpackage listing
 * @author     David Lin
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class listingActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executePostForm(sfWebRequest $request)
  {
      $this->categoryId = $request->getParameter('c', 0);
      $module = $request->getParameter('m', '');


      
      $categories = $this->categories = Doctrine::getTable('Category')->createQuery('c')->orderBy('name')->execute();
      $cats = array();
      foreach ($categories as $c){
          $cats[$c['module']][$c['id']] = $c;
      }

      if(in_array($module,array(Listing::MODULE_EVENTS, Listing::MODULE_FORUM, Listing::MODULE_MARKETPLACE))){
        $this->categories = $cats[$module];

      }else{
          $this->categories = $cats;
      }
      

      
 
      
      switch ($module){
          case Listing::MODULE_MARKETPLACE:
          case Listing::MODULE_EVENTS:
          case Listing::MODULE_FORUM:
              return ucfirst($module);
              break;

          default:
              return 'SelectModule';
              
      }

  }


  public function executePostFormImageUpload(sfWebRequest $request){
    sfConfig::set('sf_web_debug', false);
    $hash = $request->getParameter('hash', '');
    $imgFile = $request->getFiles();
    if(isset($imgFile['img'])){
        $imgFile = $imgFile['img'];
    }else{
        $imgFile = null;

        //{"thumb_name":"Screenshot3_thumb.png","img_name":"Screenshot3.png","status":"success"}
    }

    $res = array();
    //checks image uploaded
    $typeAccepted = array("image/jpeg","image/jpg", "image/gif", "image/png");
    if($hash && $imgFile['size']>0 &&$imgFile['size'] <= 1024*1024*4 && in_array($imgFile['type'],$typeAccepted) && $imgFile['error']==0){//size
        //move & rename to temp location
        $targetDir = sfConfig::get('sf_upload_dir').'/images';
        $safe_filename = preg_replace(
                     array("/\s+/", "/[^-\.\w]+/"),
                     array("_", ""),
                     trim($imgFile['name']));

        $file_name = $hash.'_'.$safe_filename;

        if(move_uploaded_file($imgFile['tmp_name'], $targetDir.'/'.$file_name)) {
            //generate thumbnail for it as well
            $thumbnail = new sfThumbnail(150, 150);
            $thumbnail->loadFile($targetDir.'/'.$file_name);
            $thumbnail->save($targetDir.'/tn_'.$file_name, 'image/jpg');
            
        } else {
            //report error
        }

    }




    return $this->renderText();
/*
    array (
      'userfile' =>
      array (
        'name' => 'search-button.png',
        'type' => 'image/png',
        'tmp_name' => '/Applications/MAMP/tmp/php/php7zm7VN',
        'error' => 0,
        'size' => 3135,
      ),
    )
*/
  }




   /**
  * Executes post action
  *
  * @param sfRequest $request A request object
  */
  public function executePost(sfWebRequest $request){



  }


 /**
  * Executes postFeedback action
  *
  * @param sfRequest $request A request object
  */
  public function executePostFeedback(sfWebRequest $request){



  }






}
