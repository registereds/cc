<?php

/**
 * BaseComment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $listing_id
 * @property integer $user_id
 * @property integer $parent_id
 * @property string $description
 * @property enum $audit_status
 * @property Listing $Listing
 * @property User $User
 * 
 * @method integer getListingId()    Returns the current record's "listing_id" value
 * @method integer getUserId()       Returns the current record's "user_id" value
 * @method integer getParentId()     Returns the current record's "parent_id" value
 * @method string  getDescription()  Returns the current record's "description" value
 * @method enum    getAuditStatus()  Returns the current record's "audit_status" value
 * @method Listing getListing()      Returns the current record's "Listing" value
 * @method User    getUser()         Returns the current record's "User" value
 * @method Comment setListingId()    Sets the current record's "listing_id" value
 * @method Comment setUserId()       Sets the current record's "user_id" value
 * @method Comment setParentId()     Sets the current record's "parent_id" value
 * @method Comment setDescription()  Sets the current record's "description" value
 * @method Comment setAuditStatus()  Sets the current record's "audit_status" value
 * @method Comment setListing()      Sets the current record's "Listing" value
 * @method Comment setUser()         Sets the current record's "User" value
 * 
 * @package    campuscenter
 * @subpackage model
 * @author     David Lin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseComment extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('comment');
        $this->hasColumn('listing_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('parent_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('description', 'string', 3000, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '',
             'length' => 3000,
             ));
        $this->hasColumn('audit_status', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'new',
              1 => 'live',
              2 => 'canceled',
             ),
             'default' => 'new',
             ));

        $this->option('type', 'MyISAM');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Listing', array(
             'local' => 'listing_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $softdelete0 = new Doctrine_Template_SoftDelete();
        $this->actAs($timestampable0);
        $this->actAs($softdelete0);
    }
}