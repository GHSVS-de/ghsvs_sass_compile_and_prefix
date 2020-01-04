<?php

$jsonAsArray = true;

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

if (!defined('CREATION_DATE'))
{
	define('CREATION_DATE', date('Y-m-d H:i:s', time()));
}

if (empty($packageJson))
{
	$packageJson = json_decode(
		file_get_contents(JPATH_MAIN . 'package.json'),
		$jsonAsArray
	);
	
	$replaceMe = $replaceWith = array();

	foreach ($packageJson['DIR'] as $key => $value)
	{
		$Variable = 'npm_package_DIR_' . $key;
		$$Variable = $value;
		
		$replaceMe[] = '$' . $Variable;
		$replaceWith[] = $value;
	}
}

if (!defined('JPATH_WORK'))
{
	define('JPATH_WORK', JPATH_MAIN . $npm_package_DIR_work . '/');
}

if (!defined('JPATH_FTP'))
{
	define('JPATH_FTP', JPATH_WORK . $npm_package_DIR_ftp . '/');
}

if (empty($ftpJson) && file_exists(JPATH_MAIN . 'ftp-credentials.json'))
{
	$ftpJson = json_decode(
		file_get_contents(JPATH_MAIN . 'ftp-credentials.json'),
		$jsonAsArray
	);
}

function mkShortPath($path)
{
	return str_replace(JPATH_MAIN, '', $path);
}