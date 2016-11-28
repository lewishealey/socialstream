<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

	require "vendor/autoload.php";
		use MetzWeb\Instagram\Instagram;

	$instagram = new Instagram(array(
    	'apiKey'      => '654fa927afdf4e85b6af84d884a87a29',
    	'apiSecret'   => '0a0d5d6085424a4da1ff2624632b07fd',
    	'apiCallback' => 'http://localhost/stream/instagram.php'
	));

	$token = "351758216.654fa92.89e3e0c5c28642f2a920e762d7abd859";
	$code = "e5f4214ed8bf48e2b0414f865ff62cb3";

	$data = $instagram->getOAuthToken($code);
	$instagram->setAccessToken($token);
	$media = $instagram->getUserMedia("self", 10);

	$access_token_insta = $instagram->getAccessToken();

	// print_r($media);
	// print_r($access_token_insta);

	echo json_encode($media);


	?>
