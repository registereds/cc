<?php

/**
 * BaseLocation
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $pcode
 * @property string $locality
 * @property string $state
 * 
 * @method string   getPcode()    Returns the current record's "pcode" value
 * @method string   getLocality() Returns the current record's "locality" value
 * @method string   getState()    Returns the current record's "state" value
 * @method Location setPcode()    Sets the current record's "pcode" value
 * @method Location setLocality() Sets the current record's "locality" value
 * @method Location setState()    Sets the current record's "state" value
 * 
 * @package    campuscenter
 * @subpackage model
 * @author     David Lin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseLocation extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('location');
        $this->hasColumn('pcode', 'string', 4, array(
             'type' => 'string',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('locality', 'string', 100, array(
             'type' => 'string',
             'primary' => true,
             'length' => 100,
             ));
        $this->hasColumn('state', 'string', 3, array(
             'type' => 'string',
             'primary' => true,
             'length' => 3,
             ));

        $this->option('type', 'MyISAM');
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}