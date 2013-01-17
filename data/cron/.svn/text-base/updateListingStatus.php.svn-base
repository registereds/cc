<?php
require_once (dirname ( __FILE__ ) . '/../../config/ProjectConfiguration.class.php');
$configuration = ProjectConfiguration::getApplicationConfiguration ( 'frontend', 'prod', true );
sfContext::createInstance ( $configuration );

// Remove the following lines if you don't use the database layer
$databaseManager = new sfDatabaseManager ( $configuration );
$databaseManager->loadConfiguration ();

//1 Create sections
ini_set('display_errors', 1);
error_reporting(E_ALL);



//*************** START LOCKING  *****************//
$flagFile = __FILE__.'.is.running';
if(file_exists($flagFile)){
    $pid = file_get_contents($flagFile);
    if($pid > 0){
            $res = exec('ps -p '.$pid);
            if( strpos($res, strval($pid)) === 0){exit;};
    }
}
file_put_contents($flagFile, getmypid());
//*************** END LOCKING *****************//



$rows = Doctrine::getTable('Listing')->updateStatus();

echo "$rows updated.\n";

//*************** START LOCKING  *****************//
unlink($flagFile);
//*************** END LOCKING  *****************//