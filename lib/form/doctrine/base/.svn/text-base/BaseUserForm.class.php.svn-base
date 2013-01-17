<?php

/**
 * User form base class.
 *
 * @method User getObject() Returns the current form's model object
 *
 * @package    campuscenter
 * @subpackage form
 * @author     David Lin
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUserForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'nick_name'           => new sfWidgetFormInputText(),
      'email'               => new sfWidgetFormInputText(),
      'password'            => new sfWidgetFormInputText(),
      'password_hash'       => new sfWidgetFormInputText(),
      'salt'                => new sfWidgetFormInputText(),
      'reset_password_hash' => new sfWidgetFormInputText(),
      'reset_expire_at'     => new sfWidgetFormInputText(),
      'register_hash'       => new sfWidgetFormInputText(),
      'last_signin_at'      => new sfWidgetFormInputText(),
      'status'              => new sfWidgetFormChoice(array('choices' => array('new' => 'new', 'live' => 'live', 'suspended' => 'suspended'))),
      'campus_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Campus'), 'add_empty' => true)),
      'city_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'add_empty' => true)),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'nick_name'           => new sfValidatorString(array('max_length' => 50)),
      'email'               => new sfValidatorString(array('max_length' => 255)),
      'password'            => new sfValidatorString(array('max_length' => 12)),
      'password_hash'       => new sfValidatorString(array('max_length' => 40)),
      'salt'                => new sfValidatorString(array('max_length' => 32)),
      'reset_password_hash' => new sfValidatorString(array('max_length' => 40)),
      'reset_expire_at'     => new sfValidatorInteger(array('required' => false)),
      'register_hash'       => new sfValidatorString(array('max_length' => 32)),
      'last_signin_at'      => new sfValidatorInteger(array('required' => false)),
      'status'              => new sfValidatorChoice(array('choices' => array(0 => 'new', 1 => 'live', 2 => 'suspended'), 'required' => false)),
      'campus_id'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Campus'), 'required' => false)),
      'city_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'User', 'column' => array('email')))
    );

    $this->widgetSchema->setNameFormat('user[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

}
