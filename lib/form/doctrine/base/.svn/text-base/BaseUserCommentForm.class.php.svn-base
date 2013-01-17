<?php

/**
 * UserComment form base class.
 *
 * @method UserComment getObject() Returns the current form's model object
 *
 * @package    campuscenter
 * @subpackage form
 * @author     David Lin
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseUserCommentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'listing_id'   => new sfWidgetFormInputText(),
      'user_id'      => new sfWidgetFormInputText(),
      'parent_id'    => new sfWidgetFormInputText(),
      'description'  => new sfWidgetFormTextarea(),
      'audit_status' => new sfWidgetFormChoice(array('choices' => array('new' => 'new', 'live' => 'live', 'canceled' => 'canceled'))),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
      'deleted_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'id', 'required' => false)),
      'listing_id'   => new sfValidatorInteger(array('required' => false)),
      'user_id'      => new sfValidatorInteger(array('required' => false)),
      'parent_id'    => new sfValidatorInteger(array('required' => false)),
      'description'  => new sfValidatorString(array('max_length' => 3000, 'required' => false)),
      'audit_status' => new sfValidatorChoice(array('choices' => array('new' => 'new', 'live' => 'live', 'canceled' => 'canceled'), 'required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
      'deleted_at'   => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('user_comment[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UserComment';
  }

}
