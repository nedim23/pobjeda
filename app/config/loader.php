<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerNamespaces(array(
	'Pobjeda\Models' => $config->application->modelsDir,
	'Pobjeda\Controllers' => $config->application->controllersDir,
	'Pobjeda\Forms' => $config->application->formsDir,
	'Pobjeda' => $config->application->libraryDir
));

$loader->register();
