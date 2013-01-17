<?php

/**
 * Listing form base class.
 *
 * @method Listing getObject() Returns the current form's model object
 *
 * @package    campuscenter
 * @subpackage form
 * @author     David Lin
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseListingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'category_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'campus_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Campus'), 'add_empty' => true)),
      'city_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'add_empty' => true)),
      'user_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'module'         => new sfWidgetFormChoice(array('choices' => array('marketplace' => 'marketplace', 'events' => 'events', 'forum' => 'forum'))),
      'status'         => new sfWidgetFormChoice(array('choices' => array('active' => 'active', 'inactive' => 'inactive', 'deleted' => 'deleted'))),
      'name'           => new sfWidgetFormInputText(),
      'description'    => new sfWidgetFormTextarea(),
      'contact'        => new sfWidgetFormInputText(),
      'category_slug'  => new sfWidgetFormInputText(),
      'campus_slug'    => new sfWidgetFormInputText(),
      'audit_status'   => new sfWidgetFormInputText(),
      'count_view'     => new sfWidgetFormInputText(),
      'count_report'   => new sfWidgetFormInputText(),
      'expires_at'     => new sfWidgetFormDateTime(),
      'deleted_at'     => new sfWidgetFormDateTime(),
      'event_start_at' => new sfWidgetFormDateTime(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'slug'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'category_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'required' => false)),
      'campus_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Campus'), 'required' => false)),
      'city_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'required' => false)),
      'user_id'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      'module'         => new sfValidatorChoice(array('choices' => array(0 => 'marketplace', 1 => 'events', 2 => 'forum'), 'required' => false)),
      'status'         => new sfValidatorChoice(array('choices' => array(0 => 'active', 1 => 'inactive', 2 => 'deleted'), 'required' => false)),
      'name'           => new sfValidatorString(array('max_length' => 100)),
      'description'    => new sfValidatorString(array('required' => false)),
      'contact'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'category_slug'  => new sfValidatorString(array('max_length' => 255)),
      'campus_slug'    => new sfValidatorString(array('max_length' => 255)),
      'audit_status'   => new sfValidatorInteger(array('required' => false)),
      'count_view'     => new sfValidatorInteger(array('required' => false)),
      'count_report'   => new sfValidatorInteger(array('required' => false)),
      'expires_at'     => new sfValidatorDateTime(),
      'deleted_at'     => new sfValidatorDateTime(),
      'event_start_at' => new sfValidatorDateTime(),
      'created_at'     => new sfValidatorDateTime(),
      'updated_at'     => new sfValidatorDateTime(),
      'slug'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('listing[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Listing';
  }

}
