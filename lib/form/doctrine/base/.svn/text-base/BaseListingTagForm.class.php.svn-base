<?php

/**
 * ListingTag form base class.
 *
 * @method ListingTag getObject() Returns the current form's model object
 *
 * @package    campuscenter
 * @subpackage form
 * @author     David Lin
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseListingTagForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'listing_id' => new sfWidgetFormInputHidden(),
      'tag_id'     => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'listing_id' => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'listing_id', 'required' => false)),
      'tag_id'     => new sfValidatorDoctrineChoice(array('model' => $this->getModelName(), 'column' => 'tag_id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('listing_tag[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ListingTag';
  }

}
