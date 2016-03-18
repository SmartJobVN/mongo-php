<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client ( "mongodb://localhost:27017" );
$collection = $client->insource->devs;

$result = $collection->insertOne ( [ 
		'fullname' => 'Phạm Văn Đoan',
		'site' => 'Viettel Telecom' 
] );
echo "Đã thêm thành công một document có ID là '{$result->getInsertedId()}'<br/>";
$result2 = $collection->insertOne ( [ 
		
		'fullname' => 'Lê Văn Kiên',
		'site' => 'Viettel Software I' 
] );
echo "Đã thêm thành công một document có ID là '{$result2->getInsertedId()}'";