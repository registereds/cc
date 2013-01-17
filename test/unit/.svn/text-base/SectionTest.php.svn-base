<?php
// test/unit/JobeetTest.php
require_once dirname(__FILE__).'/../bootstrap/unit.php';


$configuration = ProjectConfiguration::getApplicationConfiguration( 'frontend', 'test', true);
 
new sfDatabaseManager($configuration);


$t = new Section();
$t->setName('hello');
$t->save();


$test = new lime_test(1);
$test->is($t->getName(), 'hello');

