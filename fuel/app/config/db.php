<?php

return array(

	'active' => 'default',

	'default' => array(
		'type'	=> 'mysql',
		'connection' => array(
			'hostname' => '127.0.0.1',
			'database' => '',
			'username' => '',
			'password' => '',
			'persistent' => false,
		),
		'table_prefix' => '',
		'charset' => 'utf8',
		'profiling' => false,
		'caching' => false,
	),

	'redis' => array(
		'default' => array(
			'hostname'  => '',
			'port'      => 6379,
		),
	),
);
