<?php
// test/unit/JobeetTest.php
require_once dirname(__FILE__).'/../bootstrap/unit.php';


$configuration = ProjectConfiguration::getApplicationConfiguration( 'frontend', 'test', true);
 
new sfDatabaseManager($configuration);




$k = new Category();
$k->setName('testCate asdfsd  fdasfj" asdfas 123!@#!@jj');

$k->save();


$test = new lime_test(1);
$test->is($t['SectionCategories'][0]['name'], 'testCate');

