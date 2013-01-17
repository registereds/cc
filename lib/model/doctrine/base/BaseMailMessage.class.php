<?php

/**
 * BaseMailMessage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property blob $message
 * 
 * @method blob        getMessage() Returns the current record's "message" value
 * @method MailMessage setMessage() Sets the current record's "message" value
 * 
 * @package    campuscenter
 * @subpackage model
 * @author     David Lin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMailMessage extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mail_message');
        $this->hasColumn('message', 'blob', null, array(
             'type' => 'blob',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}