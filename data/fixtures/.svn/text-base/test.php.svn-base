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



//get all listings
$listing = Doctrine::getTable('Listing')->find(1);

$listing = new Listing();
$listing->getImages();


echo count($listing->getListingImages());
