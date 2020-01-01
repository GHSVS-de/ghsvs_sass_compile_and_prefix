#!/bin/bash

# See also: https://ryanstutorials.net/bash-scripting-tutorial/bash-variables.php

message="hallo Welt"

echo "A variable defined inside this script: \$message:
 $message";

echo "A variable defined in package.json: \$npm_package_FolderPrefixed:
 $npm_package_FolderPrefixed";

echo
echo '-- Command line arguments and environment variables --';
<<COMMENT

	$0 - The name (path) of the Bash script.
	$1 - $9 - The first 9 arguments to the Bash script. (As mentioned above.)
	$# - How many arguments were passed to the Bash script.
	$@ - All the arguments supplied to the Bash script.
	$? - The exit status of the most recently run process.
	$$ - The process ID of the current script.
	$USER - The username of the user running the script.
	$HOSTNAME - The hostname of the machine the script is running on.
	$SECONDS - The number of seconds since the script was started.
	$RANDOM - Returns a different random number each time is it referred to.
	$LINENO - Returns the current line number in the Bash script.

COMMENT

echo "\$1 The first passed argument for cp:
 $1";
echo "\$2 The second passed argument for cp:
 $2";
echo "Now comes a copy line using the arguments: cp -v \$1 \$2:";
cp -v $1 $2;

echo "\$? The exit status of the most recently run process:
 $?";

echo "\$0 The name (path) of the Bash script:
 $0";

echo "\$# How many arguments were passed to the Bash script:
 $#";

echo "\$@ All the arguments supplied to the Bash script:
 $@";

echo "\$$ The process ID of the current script:
 $$";

echo "\$USER The username of the user running the script:
 $USER";

echo "\$HOSTNAME The hostname of the machine the script is running on:
 $HOSTNAME";

echo "\$RANDOM Returns a different random number each time is it referred to:
 $RANDOM";

echo "\$LINENO Returns the current line number in the Bash script:
 $LINENO";

echo "\$SECONDS The number of seconds since the script was started:
 $SECONDS";
echo "\$PWD is the Pathname of the current Working Directory:
 $PWD";

echo
echo '-- Command Substitution. Save the output of a command into a variable. --';
<<COMMENT

	take the output of a command or program (what would normally be printed to the screen) and save it as the value of a variable.

COMMENT

thisDirLs=$(ls ./);
echo $thisDirLs
echo $(ls ./);

echo
echo '-- Exporting Variables to another script/scope --';
echo 'See: https://ryanstutorials.net/bash-scripting-tutorial/bash-variables.php#exporting';

echo

# get all css files plus path. 
files=$( ls $npm_package_FolderWork/$npm_package_FolderPrefixed/*.css)

for datei in $files
do
	# just print.css without path
	filename=${datei##*/};

	# just print without extension
	filename=${filename%.css};

	echo $filename;
done



