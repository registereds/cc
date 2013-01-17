<?php

/**
 * User filter form base class.
 *
 * @package    campuscenter
 * @subpackage filter
 * @author     David Lin
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUserFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nick_name'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password_hash'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'salt'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reset_password_hash' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'reset_expire_at'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'register_hash'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'last_signin_at'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'status'              => new sfWidgetFormChoice(array('choices' => array('' => '', 'new' => 'new', 'live' => 'live', 'suspended' => 'suspended'))),
      'campus_id'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Campus'), 'add_empty' => true)),
      'city_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'add_empty' => true)),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'nick_name'           => new sfValidatorPass(array('required' => false)),
      'email'               => new sfValidatorPass(array('required' => false)),
      'password'            => new sfValidatorPass(array('required' => false)),
      'password_hash'       => new sfValidatorPass(array('required' => false)),
      'salt'                => new sfValidatorPass(array('required' => false)),
      'reset_password_hash' => new sfValidatorPass(array('required' => false)),
      'reset_expire_at'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'register_hash'       => new sfValidatorPass(array('required' => false)),
      'last_signin_at'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'status'              => new sfValidatorChoice(array('required' => false, 'choices' => array('new' => 'new', 'live' => 'live', 'suspended' => 'suspended'))),
      'campus_id'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Campus'), 'column' => 'id')),
      'city_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('City'), 'column' => 'id')),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('user_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'User';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'nick_name'           => 'Text',
      'email'               => 'Text',
      'password'            => 'Text',
      'password_hash'       => 'Text',
      'salt'                => 'Text',
      'reset_password_hash' => 'Text',
      'reset_expire_at'     => 'Number',
      'register_hash'       => 'Text',
      'last_signin_at'      => 'Number',
      'status'              => 'Enum',
      'campus_id'           => 'ForeignKey',
      'city_id'             => 'ForeignKey',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
    );
  }
}
