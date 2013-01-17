<?php

class RememberMeFilter extends sfFilter
{
    /**
     *
     * @param <type> $filterChain
     */
  public function execute($filterChain)
  {
    // Execute this filter only once
    if ($this->isFirstCall())
    {
              
      $request = $this->getContext()->getRequest();
      /**
        * @var myUser
        */
      $user    = $this->getContext()->getUser();
      $cookie = $request->getCookie($this->getParameter('cookie_name'), '');//this is in id-hash format , example 123-ASDfd32fasfsdfva32lkh;
      
      if (!$user->isAuthenticated() && $cookie && preg_match('/(\d+)-(\w{32})/i', $cookie, $matches) ) { 
        
        list($dummy, $id, $hash) = $matches;

        /**
         * @var User  
         */
        $userObj = Doctrine::getTable('User')->find($id);

        if(md5($userObj->last_signin_at.$id) == $hash){ //has matches
            // sign in
            $user->signIn($id);            
        }

      }
    }

    // Execute next filter
    $filterChain->execute();
  }
}