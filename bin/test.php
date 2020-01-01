<?php
// define('JPATH_BASE', '../' . __DIR__);
define('JPATH_MAIN', dirname(__DIR__) . '/');
// echo JPATH_MAIN . PHP_EOL;

$shortopts = 'w:'; // workdir required = needs an argument. Otherwise the value becomes "strange".
$shortopts .= 'p:'; // prefixdir required
$options = getopt($shortopts);

if (empty($options['w']) || empty($options['p']))
{
	echo 'Error in ' . __FILE__ . '. Argument missing.' . PHP_EOL . print_r($options, true) . PHP_EOL . PHP_EOL;
	exit;
}

$w = JPATH_MAIN . $options['w'];
// echo $w . PHP_EOL . PHP_EOL;
// echo is_dir($w);#exit;

$p = $w . '/' . $options['p'];
// echo $p . PHP_EOL . PHP_EOL;
// echo is_dir($p);exit;

if (!is_dir($w) || !is_dir($p))
{
	echo 'Error in ' . __FILE__ . '. Wrong paths.' . PHP_EOL . print_r($options, true) . PHP_EOL . PHP_EOL;
	exit;
}
