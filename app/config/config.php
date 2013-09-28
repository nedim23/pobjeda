<?php

return new \Phalcon\Config(
	array(
		'database' => array(
			'adapter'  => 'Mysql',
			'host'     => 'localhost',
			'username' => 'root',
			'password' => 'password',
			'dbname'   => 'pobjeda',
		),
		'application' => array(
			'controllersDir' => __DIR__ . '/../../app/controllers/',
			'modelsDir'      => __DIR__ . '/../../app/models/',
			'viewsDir'       => __DIR__ . '/../../app/views/',
			'pluginsDir'     => __DIR__ . '/../../app/plugins/',
			'libraryDir'     => __DIR__ . '/../../app/library/',
			'baseUri'        => '/pobjeda/',
		),
		'metadata' => array(
			'adapter' => "Apc",
			'suffix' => 'my-suffix',
			'lifetime' => '86400'
		)
	)	
);