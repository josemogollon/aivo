<?php
return [
	'settings' => [
	'displayErrorDetails'    => true, // set to false in production
	'addContentLengthHeader' => false, // Allow the web server to send the content-length header
	
	// Facebook PHP SDK Settings
	'facebook' => [
		'app_id'                => '1956259261359274',
		'app_secret'            => 'e76472b392426f08ec93470956e41e98',
		'default_graph_version' => 'v2.10',
		'defaultFields'         => ['id', 'first_name', 'last_name'],
		],
	],
];
