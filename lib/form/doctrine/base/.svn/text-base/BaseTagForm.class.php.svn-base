<?php

/**
 * Tag form base class.
 *
 * @method Tag getObject() Returns the current form's model object
 *
 * @package    campuscenter
 * @subpackage form
 * @author     David Lin
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseTagForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'listing_id' => new sfWidgetFormInputHidden(),
      'text'       => new sfWidgetFormInputHidden(),
      'weight'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'listing_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('listing_id')), 'empty_value' => $this->getObject()->get('listing_id'), 'required' => false)),
      'text'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('text')), 'empty_value' => $this->getObject()->get('text'), 'required' => false)),
      'weight'     => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('tag[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tag';
  }

}
