<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

	require "vendor/autoload.php";
	use Abraham\TwitterOAuth\TwitterOAuth;

	$consumer = "UBgTmGA26OdlavcSDqSFSmjwE";
	$secret = "o1mUc4ZhomfQFDCR3thX4QsvKInpOt3syEH0kLjt4QmwOjRDxE";
	$access_token = "18866604-EvkPh6kaJGVY4Hyykw7P8KNfN08YU0hrEpYDQXWAV";
	$access_token_secret = "fc9xE9F9DpQYXffSQrBxQ7TwkcQVqHdRmZ0BHQgJApU49";
	$connection = new TwitterOAuth($consumer, $secret, $access_token, $access_token_secret);

	$query = false;

	if(isset($_GET["query"])) {
		$query = $_GET["query"];
		$statuses = $connection->get("search/tweets", ["q" => $query]);
		$json = json_encode($statuses);
		echo $json;
	} else {
		return $query;
	}

	?>
