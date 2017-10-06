<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'File',
	'hash_method'  => 'sha256',
	'hash_key'     => '0,5,10,15,35,50',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		 'admin' => '28a325185eb8c67ea92a893287aac331d90222616758d5c2a2c835a9996b589b',
	),

);
