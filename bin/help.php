<?php
require_once('defines.php');

$output = [];
$realPaths = false;

$options = getopt("r::");

if (isset($options['r']))
{
	$realPaths = true;
	$output[] = '### Output of `npm run ghs-help-real-paths` (path variables replaced with values from package.json)';
}
else
{
	$output[] = '### Output of `npm run ghs-help` (path variables not translated)';
}

#$output[] = '#### package.json. Example `DIR` config.' . NL . ' ```' . print_r($packageJson['DIR'], true) . '```' . NL;

$scriptsHelp = array(
	'What?' => 'Compiles, minifies, autoprefixes *.scss files to CSS and creates source-maps.',
	'Tested?' => 'Only with WSL (Windows Subsystem for Linux) + PHP 7.3 + Node + NPM on local machine.', 
	'How to start a script' =>  '`npm run [SCRIPTKEY]`',
	'The DIR-Array' =>
	'scss: Variable `$npm_package_DIR_scss` (absolute path). The source *.scss-directory.' . NL
	. '- target: Variable `$npm_package_DIR_target` (absolute path). Dir (normally a template folder) where all the compiled, prefixed, minified CSS files (inside subfolders) are copied to after all these steps are finished.' . NL
	. '- work: Variable `$npm_package_DIR_work` (relative path). Temporary local work directory inside same folder where package.json is located.' . NL
	. '- css: Variable `$npm_package_DIR_css` (relative path. Dir where all compiled, prefixed, minified CSS files are copied to.' . NL
	. '- raw:  Variable $npm_package_DIR_raw (relative path). Dir where all compiled, minified **BUT NOT PREFIXED** CSS files are copied to.' . NL
	. '- ftp:  Variable `$npm_package_DIR_ftp` (relative path). Dir where all compiled, prefixed, minified CSS files are copied to. Source folder for FTP transfer.' .NL
	. NL . '##### package.json. Example `DIR` config.' . NL . ' ```' . print_r($packageJson['DIR'], true) . '```'
);

$packageJson['scriptsHelp'] = array_merge($scriptsHelp, $packageJson['scriptsHelp']);

foreach ($packageJson['scriptsHelp'] as $scriptName => $scriptHelp)
{
	$pre = '';

	if (strpos($scriptName, 'ghs-') === 0)
	{
		$pre = 'npm run ';
		
		if ($realPaths)
		{
			$scriptHelp = str_replace($replaceMe, $replaceWith, $scriptHelp);
		}
		
		$output[] = "#### $pre$scriptName" . NL . '- ' . $scriptHelp . NL;
	}
	else
	{
		$output[] = "#### $pre$scriptName" . NL . '- ' . $scriptHelp . NL;
	}
}


$output[] = '##### package.json. `scripts` block.' . NL . ' ```' . print_r($packageJson['scripts'], true) . '```' . NL;

echo implode(NL, $output) . NL;