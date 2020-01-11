#!/usr/bin/php
<?php
/**
 * Creates folders __Prefixed-CSS and __NOT-Prefixed-CSS in workdir -w and version.txt with date of creation.
 */

require_once('defines.php');

/* 
w:workdir required = needs an argument. Otherwise the value becomes "strange".
c:Ignore !is_dir() and force creation. It's a temporary stupid fix.
*/

$shortopts = 'w:c::';
$options = getopt($shortopts);

if (empty($options['w']))
{
	echo 'Error in ' . mkShortPath(__FILE__) . '. Argument -w missing.' . NL . print_r($options, true) . NL . NL;
	exit;
}

// Absolute path.
if (strpos($options['w'], '/') === 0)
{
	$w = $options['w'] . '/';
}
else
{
	$w = JPATH_WORK . $options['w'] . '/';
}

if (!is_dir($w) && !isset($options['c']))
{
	echo 'Error in ' . mkShortPath(__FILE__) . '. Wrong paths.' . NL . print_r($options, true) . NL . NL;
	exit;
}

$thisDirs = array($npm_package_DIR_css . '/__Prefixed-CSS', $npm_package_DIR_raw . '/__NOT-Prefixed-CSS');

foreach ($thisDirs as $dir)
{
	$dir = $w . $dir . '/';
	echo 'Write version.txt file in dir ' . mkShortPath($dir) . NL;
	
	@mkdir($dir, 0755, true);
	file_put_contents($dir . 'version.txt', CREATION_DATE);
}
