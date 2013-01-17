<?php

/**
 * auth actions.
 *
 * @package    roymorgan
 * @subpackage auth
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class authActions extends sfActions {
    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeNotValid(sfWebRequest $request) {
        return sfView::SUCCESS;

    }
    public function executeNotAllowed(sfWebRequest $request) {
        return sfView::SUCCESS;
    }
    public function executeNotSecure(sfWebRequest $request) {

        $this->form = new sfForm();
        $this->form->setWidgets(array(
                'username'    => new sfWidgetFormInput(),
                'password'   => new sfWidgetFormInputPassword() ));

        return sfView::SUCCESS;

    }
}
