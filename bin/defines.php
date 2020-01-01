<?php

// the main dir where e.g. package.json is located.
if (!defined('JPATH_MAIN'))
{
	define('JPATH_MAIN', dirname(__DIR__) . '/');
}

// newline shortcut
if (!defined('NL'))
{
	define('NL', PHP_EOL);
}

if (empty($packageJson))
{
	$jsonAsArray = true;
	
	$packageJson = json_decode(
		file_get_contents(JPATH_MAIN . 'package.json'),
		$jsonAsArray
	);
}

