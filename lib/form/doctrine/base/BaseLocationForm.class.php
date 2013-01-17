<?php

/**
 * Location form base class.
 *
 * @method Location getObject() Returns the current form's model object
 *
 * @package    campuscenter
 * @subpackage form
 * @author     David Lin
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLocationForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'pcode'    => new sfWidgetFormInputHidden(),
      'locality' => new sfWidgetFormInputHidden(),
      'state'    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'pcode'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('pcode')), 'empty_value' => $this->getObject()->get('pcode'), 'required' => false)),
      'locality' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('locality')), 'empty_value' => $this->getObject()->get('locality'), 'required' => false)),
      'state'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('state')), 'empty_value' => $this->getObject()->get('state'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('location[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Location';
  }

}
