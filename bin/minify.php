<?php
require_once('defines.php');

$shortopts = 'w:r:'; // workdir required = needs an argument. Otherwise the value becomes "strange".
$options = getopt($shortopts);

#echo ' 4654sd48sa7d98sD81s8d71dsa <pre>' . print_r($options, true) . '</pre>' . NL . NL;#exit;

if (empty($options['w']))
{
	echo 'Error in ' . __FILE__ . '. Argument -w missing.' . PHP_EOL . print_r($options, true) . PHP_EOL . PHP_EOL;
	exit;
}

$w = JPATH_MAIN . $options['w'];

if (!is_dir($w))
{
	echo 'Error in ' . __FILE__ . '. Wrong paths.' . PHP_EOL . print_r($options, true) . PHP_EOL . PHP_EOL;
	exit;
}

echo "Start minify in dir $w" . NL . NL;

foreach (glob("$w/*.css") as $filename)
{
	//echo basename($filename) . NL;
	$path_parts = pathinfo($filename);
	$output = "$w/" . $path_parts['filename'] . '.min.css';
	$command = "cleancss --level 1 --format breakWith=lf --source-map --source-map-inline-sources --output $output $filename";
	exec($command);
	echo $command . NL . NL;
}

if (empty($options['r']))
{
	echo 'Error in ' . __FILE__ . '. Argument -r missing.' . PHP_EOL . print_r($options, true) . PHP_EOL . PHP_EOL;
	exit;
}

$r = JPATH_MAIN . $options['r'];

if (!is_dir($r))
{
	echo 'Error in ' . __FILE__ . '. Wrong paths -r.' . PHP_EOL . print_r($options, true) . PHP_EOL . PHP_EOL;
	exit;
}

echo "Start minify in dir $r" . NL . NL;

foreach (glob("$r/*.css") as $filename)
{
	//echo basename($filename) . NL;
	$path_parts = pathinfo($filename);
	$output = "$r/" . $path_parts['filename'] . '.min.css';
	$command = "cleancss --level 1 --format breakWith=lf --source-map --source-map-inline-sources --output $output $filename";
	exec($command);
	echo $command . NL . NL;
}