<?php

/**
 * account actions.
 *
 * @package    campuscenter
 * @subpackage account
 * @author     David Lin
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class accountActions extends sfActions {

    /**
     * Executes action
     *
     * @param sfRequest $request A request object
     */
    public function executeSignInForm(sfWebRequest $request) {

        
        return sfview::SUCCESS;
    }

    /**
     * Executes action
     *
     * @param sfRequest $request A request object
     */
    public function executeSignInFormFancy(sfWebRequest $request) {
        return sfview::SUCCESS;
    }

    /**
     * Executes action
     *
     * @param sfRequest $request A request object
     */
    public function executeSignInFeedbackFancy(sfWebRequest $request) {
        return sfview::SUCCESS;
    }

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeSignIn(sfWebRequest $request) {
        
        
        $login = trim($request->getParameter('login', ''));
        $password = trim($request->getParameter('password', ''));
        $rememberMe = intval($request->getParameter('remember', 0));

        $isFancy = $request->getParameter('fancy', 0) == 1;

        $now = time();

        $userObjs = Doctrine::getTable('User') ->createQuery('u')->addWhere('u.email = ?', $login)->limit(1)->execute();
        $userObj = $userObjs[0];

        $res = false;
        // login exists?
        if ($userObj) {
            if($userObj->status == User::STATUS_SUSPENDED) {
                $error = 'Suspended';
            }else if($userObj->status == User::STATUS_NEW) {
                $postFix = $isFancy ? 'Fancy':'';
                $error = 'Not_Activated';

            }else if (sha1($userObj->getSalt() . $password) == $userObj->getPasswordHash()) {// password is OK?

                $this->getUser()->signIn($userObj->getId(), myUser::CREDENTIAL_SIGNED_IN);

                if($rememberMe == 1) {

                    $this->getContext()->getResponse()->setCookie('cc_rm', $userObj->getId().'-'.md5($now.$userObj->getId()), time()+7*86400);
                }else {
                    $this->getContext()->getResponse()->setCookie('cc_rm', '', 0);
                }

                $res = true;


            }else {
                $error = "Incorrect";
            }
        }else {
            $error = "Incorrect";
        }

        if($res) {
            $userObj->setLastSigninAt($now);
            $userObj->save();
            if($isFancy) {
                $this->redirect('account/signInFeedbackFancy');
            }else {

                $ref = $request->getParameter('ref', '/');
                $self = $request->getParameter('self', '/');
                if(strpos($self, $this->getActionName()) ===false){
                    $this->redirect($self);
                }else if($ref != $self){
                    $this->redirect($ref);

                }else{
                    $this->redirect('homepage');
                }

            }
        }else {
            $this->getUser()->setFlash('ref', $request->getParameter('ref', '/'));
            $this->getUser()->setFlash('error', $error);
            $this->redirect('account/'.($isFancy?'signInFormFancy':'signInForm'));
        }



    }

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeSignOut(sfWebRequest $request) {
        $this->getUser()->signOut();

        $this->getContext()->getResponse()->setCookie('cc_rm', '', 0);


        return $this->redirect('homepage');
    }

    /**
     * Executes action
     *
     * @param sfRequest $request A request object
     */
    public function executePassResetForm(sfWebRequest $request) {
        return sfview::SUCCESS;
    }

    /**
     * Executes action
     *
     * @param sfRequest $request A request object
     */
    public function executePassResetFormFancy(sfWebRequest $request) {
        return sfview::SUCCESS;
    }

    /**
     * Executes action
     *
     * @param sfWebRequest $request
     */
    public function executePassReset(sfWebRequest $request) {
        $email = strtolower(trim($request->getParameter('email', '')));
        $isFancy = $request->getParameter('fancy', 0) == 1;


        $pattern = '/^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/i';

        $error = '';
        $userObj = null;
        if($email && preg_match($pattern, $email)) {
            //check to see if we have this email address;
            $userObjs = Doctrine::getTable('User')->findByDql('email = ? ', $email);
            if(count($userObjs) > 0) {
                $userObj = $userObjs[0];

            }else {
                $error = 'Not_Known';
            }

        }else {
            $error = 'Not_Valid';
        }

        $this->getUser()->setFlash('email', $email);


        if($error != '') {
            $this->getUser()->setFlash('error', $error);
            $this->redirect('account/'.($isFancy?'passResetFormFancy':'passResetForm'));

        }else {
            $domain = sfConfig::get('app_site_domain');
            $sitename = sfConfig::get('app_site_name');
            $hash = $userObj->genSalt();


            $userObj->setResetPasswordHash($hash);
            $userObj->setResetExpireAt(time()+3600);
            $userObj->save();
            $userObj->sendPassResetEmail($this);


            $this->redirect('account/'.($isFancy?'passResetFeedbackFancy':'passResetFeedback'));


        }



    }

    /**
     * Executes action
     * @param sfWebRequest $request
     */
    public function executePassResetFeedback(sfWebRequest $request) {
        return sfView::SUCCESS;
    }

    /**
     * Executes action
     * @param sfWebRequest $request
     */
    public function executePassResetFeedbackFancy(sfWebRequest $request) {
        return sfView::SUCCESS;
    }

    /**
     * Short cut of executePassResetLink
     * @param sfWebRequest $request
     */
    public function executePr(sfWebRequest $request) {
        $this->forward('account', 'passResetNewPassForm');
    }

    /**
     * Executes passRestLink action
     *
     * @param sfRequest $request A request object
     */
    public function executePassResetNewPassForm(sfWebRequest $request) {
        //1. check the hash
        $hash = $request->getParameter('c', '');
        $userObj = null;
        if($hash && strlen($hash) == 32) {
            $userObjs = Doctrine::getTable('User')->findByDql('reset_password_hash = ?', $hash);
            if(count($userObjs) > 0) {
                $userObj = $userObjs[0];
            }
        }

        $pass = false;
        if($userObj && $userObj->getResetExpireAt() > time()) {
            $pass = true;

        }else if($userObj && $userObj->getResetExpireAt() <= time() ) {
            $this->getUser()->setFlash('error', 'The link you tried to use is no longer valid. Please restart the password recovery process by providing your account email address.');
        }else {
            $this->getUser()->setFlash('error', 'The link you tried to use is incorrect. Please check URL or restart the password recovery process by providing your account email address.');
        }

        if($pass) {

            return sfView::SUCCESS;

        }else {
            $this->redirect('account/passResetForm');
        }



    }

    /**
     * Executes  action
     *
     * @param sfRequest $request A request object
     */
    public function executePassResetNewPass(sfWebRequest $request) {
        //1. check the hash
        $pass = trim($request->getParameter('pass', ''));
        $test = trim($request->getParameter('test', ''));


        //validate new passwords
        $error = array();


        try {

            if(strlen($pass) < 6) {
                $error = 'Your password must be at least 6 characters long.';
                throw new Exception($error, 1);
            }

            if($pass != $test) {
                $error = 'Passwords do not match.';
                throw new Exception($error, 1);
            }




            $hash = $request->getParameter('c', '');
            $userObj = null;
            if($hash && strlen($hash) == 32) {
                $userObjs = Doctrine::getTable('User')->findByDql('reset_password_hash = ?', $hash);
                if(count($userObjs) > 0) {
                    $userObj = $userObjs[0];
                }
            }

            if(!$userObj || $userObj->getResetExpireAt() < time()) {

                $error = 'The link you tried to use is no longer valid';
                throw new Exception($error, 2);
            }


        }catch (Exception $e) {

            $this->getUser()->setFlash('error', $e->getMessage());

            if($e->getCode() == 1) {
                $this->redirect('account/passResetLinkForm');//where new password is entered
            }else {
                $this->redirect('account/passResetForm');
            }


        }

        $userObj->setPassword($pass);
        $userObj->setLastSigninAt(time());
        $userObj->setResetPasswordHash('');
        $userObj->save();

        $userObj->sendPassResetNotificationEmail();

        $this->getUser()->signIn($userObj->getId());//user does not have the full credential here


        $this->redirect('account/passResetNewPassFeedback');
    }

    /**
     * Executes action
     * @param sfWebRequest $request
     */
    public function executePassResetNewPassFeedback(sfWebRequest $request) {
        return sfView::SUCCESS;
    }

    /**
     * Executes  action
     *
     * @param sfRequest $request A request object
     */
    public function executeRegisterForm(sfWebRequest $request) {
        return sfView::SUCCESS;
    }

    /**
     * Executes  action
     *
     * @param sfRequest $request A request object
     */
    public function executeRegisterFormFancy(sfWebRequest $request) {
        return sfView::SUCCESS;
    }

    /**
     * Executes  action
     *
     * @param sfRequest $request A request object
     */
    public function executeRegister(sfWebRequest $request) {
        $email = strtolower(trim($request->getParameter('email', '')));
        $isFancy = $request->getParameter('fancy', 0) == 1;



        $pattern = '/^([^@\s]+)@((?:[-a-z0-9]+\.)+[a-z]{2,})$/i';

        $error = '';
        $userObj = null;
        $emailSent = false;
        if($email && preg_match($pattern, $email)) {
            //check to see if we have this email address;
            $userObjs = Doctrine::getTable('User')->findByDql('email = ?', $email);
            if(count($userObjs) > 0) {
                $userObj = $userObjs[0];

                if($userObj->status == User::STATUS_NEW) {
                    //send again the email with hash
                    $userObj->sendRegisterEmail($this);
                    $emailSent = true;
                }else {
                    $error = 'Already';
                }
            }

        }else {
            $error = 'Not_Valid';
        }


        $postFix = $isFancy ? 'Fancy':'';
        if($error == '') {

            if(!$emailSent) {
                //1.create account
                $newUser = new User();
                $newUser->setEmail($email);
                $hash = $newUser->genSalt();
                $newUser->setRegisterHash($hash);
                $newUser->setStatus(User::STATUS_NEW);
                $newUser->save();
                $newUser->sendRegisterEmail($this);

            }

            


            //3. send feedback
            $this->redirect('account/registerFeedback'.$postFix);
        }else {
            $this->getUser()->setFlash('error', $error);
            $this->redirect('account/registerForm'.$postFix);
        }
    }

    /**
     * Executes action
     * @param sfWebRequest $request
     */
    public function executeRegisterFeedbackFancy(sfWebRequest $request) {
        return sfView::SUCCESS;
    }

    /**
     * Executes action
     * @param sfWebRequest $request
     */
    public function executeRegisterFeedback(sfWebRequest $request) {
        return sfView::SUCCESS;
    }

    /**
     * Executes action
     * @param sfWebRequest $request
     */
    public function executeActivateForm(sfWebRequest $request) {

        
        //1. check the hash
        $hash = $request->getParameter('c', '');
        $userObj = null;
        if($hash && strlen($hash) == 32) {
            $userObjs = Doctrine::getTable('User')->findByDql('register_hash = ?', $hash);
            if(count($userObjs) > 0) {
                $userObj = $userObjs[0];
            }
        }
        if(!$userObj){
            $this->redirect('misc/error404');
        }

        $this->campusNames = json_encode(CampusTable::getCampusNameArray());
        $this->cities = CityTable::getCityNameArray();
        return sfView::SUCCESS;
 
        
    }
    
    /**
     * Executes action
     * @param sfWebRequest $request
     */
    public function executeActivate(sfWebRequest $request) {

         //1. check the hash
        $hash = $request->getParameter('c', '');
        $userObj = null;
        if($hash && strlen($hash) == 32) {
            $userObjs = Doctrine::getTable('User')->findByDql('register_hash = ?', $hash);
            if(count($userObjs) > 0) {
                $userObj = $userObjs[0];
            }
        }
        if(!$userObj){
            $this->redirect('misc/error404' );
        }



        //2. check the data
        $data = $request->getParameter('data', null);
        if(!$data){
            $this->redirect('account/activateForm?c='.$hash);
        }
 

        $error = array();
        
        //check captcha
        $captcha = trim(myArrayUtil::getValue($data, 'captcha_code', ''));

        
        $secure_image = new Securimage();
        $secure_image->session_name = 'campuscenter';

        $code = $secure_image->getCode();
        

        if($secure_image->check($captcha) == false){
            $error['captcha_code'] = "The code you entered didn't match the word verification.";
        }

        
        //check user nick name
        $username = trim(myArrayUtil::getValue($data, 'username', ''));
        //valid ?
        if(!preg_match('/\w{4,30}/', $username)){
            $error['username'] = 'Your selected username is not valid.';
        }
        //available ?
        $userObjs = Doctrine::getTable('User')->findByDql('nick_name = ?', $username);
        if(count($userObjs) > 0) {
           $error['username'] = 'Your selected username is not available, please try another one';
        }


        
        //check passwords
        $pass = trim(myArrayUtil::getValue($data, 'password', ''));
        if(strlen($pass) < 6){
            $error['password'] = "Your password must have at least 6 characters";
        }else if(strlen($pass) > 30){
            $error['password'] = "Your password must have no more than 30 characters";
        }

        $pass2 = trim(myArrayUtil::getValue($data, 'password2', ''));

        if($pass2 != $pass){
            $error['password2'] = "Your passwords did not match";
        }


        //check campus
        $campus = trim(myArrayUtil::getValue($data, 'campus', ''));
        if(strlen($campus) > 0 && strlen($campus) < 10){
            $error['password'] = "Please provide full name or leave blank";
        }
        
        //check city
        $cityId = intval(myArrayUtil::getValue($data, 'city', 0));
        if($cityId>0){
            $city = Doctrine::getTable('City')->find($cityId);
            if(!$city){
                $error['city'] = "Selected city is not valid";
            }
        }
        

        if(count($error) > 0){
            $this->getUser()->setFlash('data', $data);
            $this->getUser()->setFlash('errors', $error);
            $this->redirect('account/activateForm?c='.$hash);
        }else{
            
            $campusColl = Doctrine::getTable('Campus')->findBy('name', $campus);
            if(count($campusColl)==0){
                $campusObj= new Campus();
                $campusObj->setName($campus);
                $campusObj->setCityId($cityId);
                $campusObj->save();
            }else{
                $campusObj = $campusColl[0];
            }
        


            //record change
     
            $userObj->setNickName($username);
            $userObj->setPassword($pass);
            $userObj->setCityId($cityId);
            $userObj->setCampus($campusObj);
            $userObj->setStatus(User::STATUS_LIVE);
            $userObj->setRegisterHash('');
            $userObj->save();

            
            //send email
            $userObj->sendActivatedEmail($this);

            
            //log user in without giving credential            
            $this->getUser()->signIn($userObj->getId());
            
            $this->redirect('account/activateFeedback');
        }

        
    }

    /**
     * Executes action
     * @param sfWebRequest $request
     */
    public function executeActivateFeedback(sfWebRequest $request) {
        return sfView::SUCCESS;
    }

    /**
     * Executes action
     * @param sfWebRequest $request
     */
    public function executeCheckUsername(sfWebRequest $request) {
        sfConfig::set('sf_web_debug', false);
        $this->setLayout(false);
        
        $data = $request->getParameter('data', '');
        $username = isset($data['username']) ? $data['username'] : "";
        $username = trim($username);
        if(strlen($username)>=4){
            $userObjs = Doctrine::getTable('User')->findByDql('nick_name = ?', $username);
            if(count($userObjs) > 0) {
               return $this->renderText("false");
            }else{
                return $this->renderText("true");
            }
        }
        
        
        return $this->renderText("false");
    }
    
}
