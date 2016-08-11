<?php
$loader = require __DIR__ . '/vendor/autoload.php';

$app = new \Slim\Slim ();

$app->get ( '/', function () {
	echo json_encode ( [
			"api" => "Ivan é o foda",
			"version" => "1.0.0"
	] );
} );


$app->run ();
?>
