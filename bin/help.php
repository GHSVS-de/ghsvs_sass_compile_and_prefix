<?php
require_once('defines.php');
// echo JPATH_MAIN . PHP_EOL;

$output = [];
foreach ($packageJson['scriptsHelp'] as $scriptName => $scriptHelp)
{
	$pre = '';

	if (strpos($scriptName, 'ghs-') === 0)
	{
		$pre = 'npm run ';
	}
	
	$output[] = "#### $pre$scriptName" . NL . "- $scriptHelp" . NL;
}

$output[] = '##### Example DIR config.' . NL . ' ```' . print_r($packageJson['DIR'], true) . '```' . NL;

echo implode(NL, $output) . NL;