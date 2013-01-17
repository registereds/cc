<?php

/**
 * Listing filter form base class.
 *
 * @package    campuscenter
 * @subpackage filter
 * @author     David Lin
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseListingFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'category_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Category'), 'add_empty' => true)),
      'campus_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Campus'), 'add_empty' => true)),
      'city_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'add_empty' => true)),
      'user_id'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'module'         => new sfWidgetFormChoice(array('choices' => array('' => '', 'marketplace' => 'marketplace', 'events' => 'events', 'forum' => 'forum'))),
      'status'         => new sfWidgetFormChoice(array('choices' => array('' => '', 'active' => 'active', 'inactive' => 'inactive', 'deleted' => 'deleted'))),
      'name'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'contact'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'category_slug'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'campus_slug'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'audit_status'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'count_view'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'count_report'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'expires_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'deleted_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'event_start_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'slug'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'category_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Category'), 'column' => 'id')),
      'campus_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Campus'), 'column' => 'id')),
      'city_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('City'), 'column' => 'id')),
      'user_id'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'module'         => new sfValidatorChoice(array('required' => false, 'choices' => array('marketplace' => 'marketplace', 'events' => 'events', 'forum' => 'forum'))),
      'status'         => new sfValidatorChoice(array('required' => false, 'choices' => array('active' => 'active', 'inactive' => 'inactive', 'deleted' => 'deleted'))),
      'name'           => new sfValidatorPass(array('required' => false)),
      'description'    => new sfValidatorPass(array('required' => false)),
      'contact'        => new sfValidatorPass(array('required' => false)),
      'category_slug'  => new sfValidatorPass(array('required' => false)),
      'campus_slug'    => new sfValidatorPass(array('required' => false)),
      'audit_status'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'count_view'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'count_report'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'expires_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'deleted_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'event_start_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'slug'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('listing_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Listing';
  }

  public function getFields()
  {
    return array(
      'id'             => 'Number',
      'category_id'    => 'ForeignKey',
      'campus_id'      => 'ForeignKey',
      'city_id'        => 'ForeignKey',
      'user_id'        => 'ForeignKey',
      'module'         => 'Enum',
      'status'         => 'Enum',
      'name'           => 'Text',
      'description'    => 'Text',
      'contact'        => 'Text',
      'category_slug'  => 'Text',
      'campus_slug'    => 'Text',
      'audit_status'   => 'Number',
      'count_view'     => 'Number',
      'count_report'   => 'Number',
      'expires_at'     => 'Date',
      'deleted_at'     => 'Date',
      'event_start_at' => 'Date',
      'created_at'     => 'Date',
      'updated_at'     => 'Date',
      'slug'           => 'Text',
    );
  }
}
