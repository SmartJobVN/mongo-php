<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client ( "mongodb://localhost:27017" );
$collection = $client->insources->devs;

$result = $collection->find ( [ 
		'fullname' => 'Phạm Văn Đoan' 
] );

var_dump($result);

// foreach ( $result as $entry ) {
// 	echo $entry ['_id'], ': ', $entry ['fullname'], "\n";
// }

