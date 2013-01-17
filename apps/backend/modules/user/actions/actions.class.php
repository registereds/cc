<?php

/**
 * user actions.
 *
 * @package    roymorgan
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions {
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */

    public function executeLogin(sfWebRequest $request) {
        

 

        $pass = $request->getParameter('password');
        $usr = $request->getParameter('username');

        if($pass == 'eight8a' && $usr == 'effectivem') {
            $this->getUser()->login();
            $this->redirect('progress/index');
        }
        else {
           // $this->forward('auth', 'notSecure');
        }

    }

    public function executeLogout(sfWebRequest $request) {
        $this->getUser()->logout();
        $this->forward('auth', 'notSecure');
    }
}
