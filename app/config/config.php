<?php

return new \Phalcon\Config(array(
	'database' => array(
		'adapter'     => 'Mysql',
		'host'        => 'localhost',
		/*'username'    => 'seeecono_mehom',  // za serversku upotrebu
		'password'    => 'trackandtrace',
		'dbname'      => 'seeecono_tt'*/

		'username'    => '',
		'password'    => '',
		'dbname'      => 'pobjeda'  // za lokalnu upotrebu

	),
	'application' => array(
		'controllersDir' => __DIR__ . '/../../app/controllers/',
		'modelsDir'      => __DIR__ . '/../../app/models/',
		'formsDir'       => __DIR__ . '/../../app/forms/',
		'viewsDir'       => __DIR__ . '/../../app/views/',
		'libraryDir'     => __DIR__ . '/../../app/library/',
		'pluginsDir'     => __DIR__ . '/../../app/plugins/',
		'cacheDir'       => __DIR__ . '/../../app/cache/',
		//'baseUri'        => '/seeecono/', // za serversku upotrebu
		'baseUri'        => '/pobjeda/', // za lokalnu upotrebu
	)
));
