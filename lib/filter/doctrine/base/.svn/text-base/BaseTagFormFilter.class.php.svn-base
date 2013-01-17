<?php

/**
 * Tag filter form base class.
 *
 * @package    campuscenter
 * @subpackage filter
 * @author     David Lin
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTagFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'weight'     => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'weight'     => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('tag_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tag';
  }

  public function getFields()
  {
    return array(
      'listing_id' => 'Number',
      'text'       => 'Text',
      'weight'     => 'Number',
    );
  }
}
