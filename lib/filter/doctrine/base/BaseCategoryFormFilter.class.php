<?php

/**
 * Category filter form base class.
 *
 * @package    campuscenter
 * @subpackage filter
 * @author     David Lin
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseCategoryFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ranking'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'module'      => new sfWidgetFormChoice(array('choices' => array('' => '', 'marketplace' => 'marketplace', 'events' => 'events', 'forum' => 'forum'))),
      'slug'        => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'name'        => new sfValidatorPass(array('required' => false)),
      'description' => new sfValidatorPass(array('required' => false)),
      'ranking'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'module'      => new sfValidatorChoice(array('required' => false, 'choices' => array('marketplace' => 'marketplace', 'events' => 'events', 'forum' => 'forum'))),
      'slug'        => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('category_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Category';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'name'        => 'Text',
      'description' => 'Text',
      'ranking'     => 'Number',
      'module'      => 'Enum',
      'slug'        => 'Text',
    );
  }
}
