<?php
require_once (dirname ( __FILE__ ) . '/../../config/ProjectConfiguration.class.php');
$configuration = ProjectConfiguration::getApplicationConfiguration ( 'frontend', 'dev', true );
sfContext::createInstance ( $configuration );

// Remove the following lines if you don't use the database layer
$databaseManager = new sfDatabaseManager ( $configuration );
$databaseManager->loadConfiguration ();

//1 Create sections
ini_set('memory_limit','3000M');

ini_set('display_errors', 1);
error_reporting(E_ALL);



include('_loadUserData.php');
include('_loadCityData.php');
include('_loadCampusData.php');
include('_loadCategoryData.php');
include('_loadListingData.php');
include('_loadCommentData.php');
include('_loadImageData.php');

//create view;
$doctrine = Doctrine_Manager::getInstance()->getCurrentConnection()->getDbh();

$sql = 'drop table if exists tag';
$stmt = $doctrine->exec($sql);
$sql = 'drop view if exists tag';
$stmt = $doctrine->exec($sql);

$sql = 'CREATE VIEW tag AS SELECT id AS listing_id, keyword AS TEXT, COUNT( * ) as weight
FROM listing_index
GROUP BY id, keyword';
$stmt = $doctrine->exec($sql);


//create location db

$dataFile = dirname(__FILE__).'/pc-book_20100831.csv';//change there the file

$sql = <<<EOD
LOAD DATA INFILE  '$dataFile' REPLACE INTO TABLE  `location`
FIELDS TERMINATED BY  ','
ENCLOSED BY  '"'
ESCAPED BY  '\\\\'
LINES TERMINATED BY '\\n' IGNORE 1 LINES
EOD;


echo "\n$sql\n";
$stmt = $doctrine->exec($sql);