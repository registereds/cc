<?php

/**
 * BaseListing
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $category_id
 * @property integer $campus_id
 * @property integer $city_id
 * @property integer $user_id
 * @property enum $module
 * @property enum $status
 * @property string $name
 * @property clob $description
 * @property string $contact
 * @property string $category_slug
 * @property string $campus_slug
 * @property integer $audit_status
 * @property integer $count_view
 * @property integer $count_report
 * @property timestamp $expires_at
 * @property timestamp $deleted_at
 * @property timestamp $event_start_at
 * @property Category $Category
 * @property User $User
 * @property Campus $Campus
 * @property City $City
 * @property Doctrine_Collection $ListingComments
 * @property Doctrine_Collection $ListingImages
 * @property Doctrine_Collection $ListingTags
 * 
 * @method integer             getCategoryId()      Returns the current record's "category_id" value
 * @method integer             getCampusId()        Returns the current record's "campus_id" value
 * @method integer             getCityId()          Returns the current record's "city_id" value
 * @method integer             getUserId()          Returns the current record's "user_id" value
 * @method enum                getModule()          Returns the current record's "module" value
 * @method enum                getStatus()          Returns the current record's "status" value
 * @method string              getName()            Returns the current record's "name" value
 * @method clob                getDescription()     Returns the current record's "description" value
 * @method string              getContact()         Returns the current record's "contact" value
 * @method string              getCategorySlug()    Returns the current record's "category_slug" value
 * @method string              getCampusSlug()      Returns the current record's "campus_slug" value
 * @method integer             getAuditStatus()     Returns the current record's "audit_status" value
 * @method integer             getCountView()       Returns the current record's "count_view" value
 * @method integer             getCountReport()     Returns the current record's "count_report" value
 * @method timestamp           getExpiresAt()       Returns the current record's "expires_at" value
 * @method timestamp           getDeletedAt()       Returns the current record's "deleted_at" value
 * @method timestamp           getEventStartAt()    Returns the current record's "event_start_at" value
 * @method Category            getCategory()        Returns the current record's "Category" value
 * @method User                getUser()            Returns the current record's "User" value
 * @method Campus              getCampus()          Returns the current record's "Campus" value
 * @method City                getCity()            Returns the current record's "City" value
 * @method Doctrine_Collection getListingComments() Returns the current record's "ListingComments" collection
 * @method Doctrine_Collection getListingImages()   Returns the current record's "ListingImages" collection
 * @method Doctrine_Collection getListingTags()     Returns the current record's "ListingTags" collection
 * @method Listing             setCategoryId()      Sets the current record's "category_id" value
 * @method Listing             setCampusId()        Sets the current record's "campus_id" value
 * @method Listing             setCityId()          Sets the current record's "city_id" value
 * @method Listing             setUserId()          Sets the current record's "user_id" value
 * @method Listing             setModule()          Sets the current record's "module" value
 * @method Listing             setStatus()          Sets the current record's "status" value
 * @method Listing             setName()            Sets the current record's "name" value
 * @method Listing             setDescription()     Sets the current record's "description" value
 * @method Listing             setContact()         Sets the current record's "contact" value
 * @method Listing             setCategorySlug()    Sets the current record's "category_slug" value
 * @method Listing             setCampusSlug()      Sets the current record's "campus_slug" value
 * @method Listing             setAuditStatus()     Sets the current record's "audit_status" value
 * @method Listing             setCountView()       Sets the current record's "count_view" value
 * @method Listing             setCountReport()     Sets the current record's "count_report" value
 * @method Listing             setExpiresAt()       Sets the current record's "expires_at" value
 * @method Listing             setDeletedAt()       Sets the current record's "deleted_at" value
 * @method Listing             setEventStartAt()    Sets the current record's "event_start_at" value
 * @method Listing             setCategory()        Sets the current record's "Category" value
 * @method Listing             setUser()            Sets the current record's "User" value
 * @method Listing             setCampus()          Sets the current record's "Campus" value
 * @method Listing             setCity()            Sets the current record's "City" value
 * @method Listing             setListingComments() Sets the current record's "ListingComments" collection
 * @method Listing             setListingImages()   Sets the current record's "ListingImages" collection
 * @method Listing             setListingTags()     Sets the current record's "ListingTags" collection
 * 
 * @package    campuscenter
 * @subpackage model
 * @author     David Lin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseListing extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('listing');
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('campus_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('city_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('module', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'marketplace',
              1 => 'events',
              2 => 'forum',
             ),
             ));
        $this->hasColumn('status', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'active',
              1 => 'inactive',
              2 => 'deleted',
             ),
             ));
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('description', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
             'default' => '',
             ));
        $this->hasColumn('contact', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '',
             'length' => 255,
             ));
        $this->hasColumn('category_slug', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('campus_slug', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('audit_status', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('count_view', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             ));
        $this->hasColumn('count_report', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('expires_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('deleted_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));
        $this->hasColumn('event_start_at', 'timestamp', null, array(
             'type' => 'timestamp',
             'notnull' => true,
             ));

        $this->option('type', 'MyISAM');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Category', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('Campus', array(
             'local' => 'campus_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasOne('City', array(
             'local' => 'city_id',
             'foreign' => 'id',
             'onDelete' => 'SET NULL'));

        $this->hasMany('Comment as ListingComments', array(
             'local' => 'id',
             'foreign' => 'listing_id'));

        $this->hasMany('Image as ListingImages', array(
             'local' => 'id',
             'foreign' => 'listing_id'));

        $this->hasMany('Tag as ListingTags', array(
             'local' => 'id',
             'foreign' => 'listing_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $searchable0 = new Doctrine_Template_Searchable(array(
             'fields' => 
             array(
              0 => 'name',
              1 => 'description',
             ),
             ));
        $sluggable0 = new Doctrine_Template_Sluggable(array(
             'unique' => false,
             'fields' => 
             array(
              0 => 'name',
             ),
             'canUpdate' => true,
             ));
        $this->actAs($timestampable0);
        $this->actAs($searchable0);
        $this->actAs($sluggable0);
    }
}