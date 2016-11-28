<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

	require "vendor/autoload.php";
	use Abraham\TwitterOAuth\TwitterOAuth;
	use MetzWeb\Instagram\Instagram;

	$consumer = "UBgTmGA26OdlavcSDqSFSmjwE";
	$secret = "o1mUc4ZhomfQFDCR3thX4QsvKInpOt3syEH0kLjt4QmwOjRDxE";
	$access_token = "18866604-EvkPh6kaJGVY4Hyykw7P8KNfN08YU0hrEpYDQXWAV";
	$access_token_secret = "fc9xE9F9DpQYXffSQrBxQ7TwkcQVqHdRmZ0BHQgJApU49";


	$fb = new Facebook\Facebook([
  'app_id' => '924962840952453', // Replace {app-id} with your app id
  'app_secret' => 'fe5ab331391d48fb8177d985351b7042',
  'default_graph_version' => 'v2.2',
  ]);

	$helper = $fb->getRedirectLoginHelper();

	$permissions = ['email']; // Optional permissions
	$loginUrl = $helper->getLoginUrl('http://localhost/stream/callback.php', $permissions);

	echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';


	$instagram = new Instagram(array(
    	'apiKey'      => '654fa927afdf4e85b6af84d884a87a29',
    	'apiSecret'   => '0a0d5d6085424a4da1ff2624632b07fd',
    	'apiCallback' => 'http://localhost/stream/'
	));

	$token = "351758216.654fa92.89e3e0c5c28642f2a920e762d7abd859";
	$code = "f1806a50763343da9bcdcee9f2fd8f85";

	$data = $instagram->getOAuthToken($code);
	$instagram->setAccessToken($token);
	$media = $instagram->getUser();
	$media = $instagram->getTag("jephwed");

	$access_token_insta = $instagram->getAccessToken();

	print_r($media);
	print_r($access_token_insta);

	$connection = new TwitterOAuth($consumer, $secret, $access_token, $access_token_secret);
	$statuses = $connection->get("search/tweets", ["q" => "#jephwed"]);


	echo json_encode($statuses);


	echo "<a href='{$instagram->getLoginUrl(array('basic','likes','public_content'))}'>Login with Instagram</a>";


	?>
