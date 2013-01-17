<?php
// test/unit/JobeetTest.php
require_once dirname(__FILE__).'/../bootstrap/unit.php';


$configuration = ProjectConfiguration::getApplicationConfiguration( 'frontend', 'test', true);
 
new sfDatabaseManager($configuration);


$l = new Listing();
 $l['name'] = 'my first test';
 $l['description'] = 'this is my first test, how are you helo';

 $l['Category']['name'] = 'helo category';
 
 
 $t = new Tag();
 $t['name'] = 'first tag';
 $t2 = new Tag();
 $t2['name'] = 'second';

 $l['Tags'][] = $t;
 $l['Tags'][] = $t2;
 
 
 $l->save();

$test = new lime_test(1);
$test->is($l['Tags'][0]['name'], 'first tag');


