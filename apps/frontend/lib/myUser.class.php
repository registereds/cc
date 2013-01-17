<?php

class myUser extends sfBasicSecurityUser
{



        const CREDENTIAL_SIGNED_IN = 'CREDENTIAL_SIGNED_IN';
        


        /**
         * Sign in user with the given Id
         * @param int $id
         */
        public function signIn($id, $credentail=null)
        {
                $this->setAttribute('userId', $id, 'currentUser');
                $this->setAuthenticated(true);

                if($credentail){
                    $this->addCredential($credentail);
                }
        }

        /**
         * Sign out user
         */
        public function signOut()
        {
                $this->getAttributeHolder()->removeNamespace('currentUser');
                $this->setAuthenticated(false);
                $this->clearCredentials();
        }


        /**
         * Return the user Id
         * @return int
         */
        public function getId(){

            return $this->getAttribute('userId', 0, 'currentUser');
        }

        /**
         * Holder of the user object
         * @var User
         */
        private $currentUser;

        /**
         * Return the user object of the current signed in
         * @return User
         */
        public function getUser(){
            if(empty($this->currentUser)){
                $this->currentUser = Doctrine_Core::getTable('User')->find($this->getId());
            }
            return $this->currentUser;
        }



}