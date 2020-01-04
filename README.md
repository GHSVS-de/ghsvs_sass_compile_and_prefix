You should know what you do if you use these scripts!

`cd /mnt/z/git-kram/ghsvs_sass_compile_and_prefix/`

`npm install`

Optional: `npm run ghs-watch`

`npm run ghs-all`

## "Overview"


> ghsvs_sass_compile_and_prefix@2020.1.1 ghs-help /mnt/z/git-kram/ghsvs_sass_compile_and_prefix
> php bin/help.php

### Output of `npm run ghs-help` (path variables not translated)
#### What?
- Compiles, minifies, autoprefixes *.scss files to CSS and creates source-maps.

#### Tested?
- Only with WSL (Windows Subsystem for Linux) + PHP 7.3 + Node + NPM on local machine.

#### How to start a script
- `npm run [SCRIPTKEY]`

#### The DIR-Array
- scss: Variable `$npm_package_DIR_scss` (absolute path). The source *.scss-directory.
- target: Variable `$npm_package_DIR_target` (absolute path). Dir (normally a template folder) where all the compiled, prefixed, minified CSS files (inside subfolders) are copied to after all these steps are finished.
- work: Variable `$npm_package_DIR_work` (relative path). Temporary local work directory inside same folder where package.json is located.
- css: Variable `$npm_package_DIR_css` (relative path. Dir where all compiled, prefixed, minified CSS files are copied to.
- raw:  Variable `$npm_package_DIR_raw` (relative path). Dir where all compiled, minified **BUT NOT PREFIXED** CSS files are copied to.
- ftp:  Variable `$npm_package_DIR_ftp` (relative path). Dir where all compiled, prefixed, minified CSS files are copied to. Source folder for FTP transfer.

##### package.json. Example `DIR` config.
 ```Array
(
    [scss] => /mnt/z/_jobs/ghsvs-de-relaunch-bs3/templates/bs4ghsvs/scss
    [target] => /mnt/z/_jobs/ghsvs-de-relaunch-bs3/templates/bs4ghsvs
    [work] => ghs
    [css] => css
    [raw] => css-raw
    [ftp] => ftp-transfer
)
```

#### npm run ghs-npm-update-check
- Check for updates for packages in package.json. Prints a list, not more.

#### npm run ghs-ncu-override-json
- Check for updates for packages in package.json. AND override package.json file (newest stable versions). Don't forget to run npm install!

#### npm run ghs-watch
- Starts a `nodemon` watcher for changes in scss directory `$npm_package_DIR_scss` that starts a complete, new compilation via `npm run ghs-all` when a scss file is changed. Also starts a complete, new compilation if the watcher is started.

#### npm run ghs-all
- Runs a complete job **without FTP upload**: `ghs-rm ghs-mkdir ghs-compile ghs-copy-raw ghs-prefix ghs-minify ghs-produktiv ghs-ftp`

#### npm run ghs-rm
- Deletes **local** work directory `$npm_package_DIR_work` completely.

#### npm run ghs-mkdir
- Creates **local** work directories `$npm_package_DIR_work/$npm_package_DIR_raw`.

#### npm run ghs-compile
- Compiles *.scss files from `$npm_package_DIR_scss` to *.css files in **local** work dir `$npm_package_DIR_work`.

#### npm run ghs-copy-raw
- Copies *.css and *.css.map to local dir `$npm_package_DIR_work/$npm_package_DIR_raw`.

#### npm run ghs-prefix
- Runs Autoprefixer (See file `.browserslistrc`). 
- Source: All *.css files in **local** work dir `$npm_package_DIR_work`. 
- Target: Replaces *.css files in same dir.

#### npm run ghs-minify
- Minifies all *.css to *.min.css in **local** `$npm_package_DIR_work` and `$npm_package_DIR_work/$npm_package_DIR_raw`.

#### npm run ghs-produktiv
- Runs several npm scripts that match `ghs-produktiv-*`.

#### npm run ghs-produktiv-mkdir
- Creates TARGET dirs `$npm_package_DIR_target/$npm_package_DIR_css` and `$npm_package_DIR_target/$npm_package_DIR_raw` and `version.txt` files (datetime).

#### npm run ghs-produktiv-copy
- Copies all prefixed *.css and *.map to  TARGET dir `$npm_package_DIR_target/$npm_package_DIR_css`.

#### npm run ghs-produktiv-copyRaw
- Copies all NON-prefixed *.css and *.map to TARGET dir `$npm_package_DIR_target/$npm_package_DIR_raw`.

#### npm run ghs-ftp
- Runs several npm scripts that match `ghs-ftp-*`. to **prepare** **locally** the upload of files via FTP. **Runs no FTP upload.**

#### npm run ghs-ftp-mkdir
- Creates local dirs `$npm_package_DIR_work/$npm_package_DIR_ftp/$npm_package_DIR_css` and `$npm_package_DIR_work/$npm_package_DIR_ftp/$npm_package_DIR_raw` and subfolders with `version.txt` files (datetime).

#### npm run ghs-ftp-copy
- Copies all prefixed *.css and *.map to local `$npm_package_DIR_work/$npm_package_DIR_ftp/$npm_package_DIR_css`.

#### npm run ghs-ftp-copyRaw
- Copies all NON-prefixed *.css and *.map to local `$npm_package_DIR_work/$npm_package_DIR_ftp/$npm_package_DIR_raw`.

#### npm run ghs-upload
- Runs the upload of all files/dirs via FTP inside dir `$npm_package_DIR_work/$npm_package_DIR_ftp`. NEEDS A CORRECTLY CONFIGURED ftp-credentials.json! Check twice and test before using it.


> ghsvs_sass_compile_and_prefix@2020.1.1 ghs-help /mnt/z/git-kram/ghsvs_sass_compile_and_prefix
> php bin/help.php

### Output of `npm run ghs-help` (path variables not translated)
#### What?
- Compiles, minifies, autoprefixes *.scss files to CSS and creates source-maps.

#### Tested?
- Only with WSL (Windows Subsystem for Linux) + PHP 7.3 + Node + NPM on local machine.

#### How to start a script
- `npm run [SCRIPTKEY]`

#### The DIR-Array
- scss: Variable `$npm_package_DIR_scss` (absolute path). The source *.scss-directory.
- target: Variable `$npm_package_DIR_target` (absolute path). Dir (normally a template folder) where all the compiled, prefixed, minified CSS files (inside subfolders) are copied to after all these steps are finished.
- work: Variable `$npm_package_DIR_work` (relative path). Temporary local work directory inside same folder where package.json is located.
- css: Variable `$npm_package_DIR_css` (relative path. Dir where all compiled, prefixed, minified CSS files are copied to.
- raw:  Variable `$npm_package_DIR_raw` (relative path). Dir where all compiled, minified **BUT NOT PREFIXED** CSS files are copied to.
- ftp:  Variable `$npm_package_DIR_ftp` (relative path). Dir where all compiled, prefixed, minified CSS files are copied to. Source folder for FTP transfer.

##### package.json. Example `DIR` config.
 ```Array
(
    [scss] => /mnt/z/_jobs/ghsvs-de-relaunch-bs3/templates/bs4ghsvs/scss
    [target] => /mnt/z/_jobs/ghsvs-de-relaunch-bs3/templates/bs4ghsvs
    [work] => ghs
    [css] => css
    [raw] => css-raw
    [ftp] => ftp-transfer
)
```

#### npm run ghs-npm-update-check
- Check for updates for packages in package.json. Prints a list, not more.

#### npm run ghs-ncu-override-json
- Check for updates for packages in package.json. AND override package.json file (newest stable versions). Don't forget to run npm install!

#### npm run ghs-watch
- Starts a `nodemon` watcher for changes in scss directory `$npm_package_DIR_scss` that starts a complete, new compilation via `npm run ghs-all` when a scss file is changed. Also starts a complete, new compilation if the watcher is started.

#### npm run ghs-all
- Runs a complete job **without FTP upload**: `ghs-rm ghs-mkdir ghs-compile ghs-copy-raw ghs-prefix ghs-minify ghs-produktiv ghs-ftp`

#### npm run ghs-rm
- Deletes **local** work directory `$npm_package_DIR_work` completely.

#### npm run ghs-mkdir
- Creates **local** work directories `$npm_package_DIR_work/$npm_package_DIR_raw`.

#### npm run ghs-compile
- Compiles *.scss files from `$npm_package_DIR_scss` to *.css files in **local** work dir `$npm_package_DIR_work`.

#### npm run ghs-copy-raw
- Copies *.css and *.css.map to local dir `$npm_package_DIR_work/$npm_package_DIR_raw`.

#### npm run ghs-prefix
- Runs Autoprefixer (See file `.browserslistrc`). 
- Source: All *.css files in **local** work dir `$npm_package_DIR_work`. 
- Target: Replaces *.css files in same dir.

#### npm run ghs-minify
- Minifies all *.css to *.min.css in **local** `$npm_package_DIR_work` and `$npm_package_DIR_work/$npm_package_DIR_raw`.

#### npm run ghs-produktiv
- Runs several npm scripts that match `ghs-produktiv-*`.

#### npm run ghs-produktiv-mkdir
- Creates TARGET dirs `$npm_package_DIR_target/$npm_package_DIR_css` and `$npm_package_DIR_target/$npm_package_DIR_raw` and `version.txt` files (datetime).

#### npm run ghs-produktiv-copy
- Copies all prefixed *.css and *.map to  TARGET dir `$npm_package_DIR_target/$npm_package_DIR_css`.

#### npm run ghs-produktiv-copyRaw
- Copies all NON-prefixed *.css and *.map to TARGET dir `$npm_package_DIR_target/$npm_package_DIR_raw`.

#### npm run ghs-ftp
- Runs several npm scripts that match `ghs-ftp-*`. to **prepare** **locally** the upload of files via FTP. **Runs no FTP upload.**

#### npm run ghs-ftp-mkdir
- Creates local dirs `$npm_package_DIR_work/$npm_package_DIR_ftp/$npm_package_DIR_css` and `$npm_package_DIR_work/$npm_package_DIR_ftp/$npm_package_DIR_raw` and subfolders with `version.txt` files (datetime).

#### npm run ghs-ftp-copy
- Copies all prefixed *.css and *.map to local `$npm_package_DIR_work/$npm_package_DIR_ftp/$npm_package_DIR_css`.

#### npm run ghs-ftp-copyRaw
- Copies all NON-prefixed *.css and *.map to local `$npm_package_DIR_work/$npm_package_DIR_ftp/$npm_package_DIR_raw`.

#### npm run ghs-upload
- Runs the upload of all files/dirs via FTP inside dir `$npm_package_DIR_work/$npm_package_DIR_ftp`. NEEDS A CORRECTLY CONFIGURED ftp-credentials.json! Check twice and test before using it.

##### package.json. `scripts` block.
 ```Array
(
    [ghs-help] => php bin/help.php
    [ghs-help-real-paths] => php bin/help.php -r
    [ghs-npm-update-check] => ncu
    [ghs-ncu-override-json] => ncu -u
    [ghs-watch] => nodemon --watch $npm_package_DIR_scss/ --ext scss --exec "npm run ghs-all"
    [ghs-all] => npm-run-all ghs-rm ghs-mkdir ghs-compile ghs-copy-raw ghs-prefix ghs-minify ghs-produktiv ghs-ftp
    [ghs-rm] => cross-env-shell "shx rm -rf $npm_package_DIR_work"
    [ghs-mkdir] => cross-env-shell "shx mkdir -p $npm_package_DIR_work/$npm_package_DIR_raw"
    [ghs-compile] => node-sass --output-style expanded --source-map true --source-map-contents true --precision 6 $npm_package_DIR_scss/ -o $npm_package_DIR_work/
    [ghs-copy-raw] => cross-env-shell shx cp $npm_package_DIR_work/*.{css,map} $npm_package_DIR_work/$npm_package_DIR_raw
    [ghs-prefix] => postcss --config build/postcss.config.js --replace "$npm_package_DIR_work/*.css" "!$npm_package_DIR_work/*.min.css"
    [ghs-minify] => php ./bin/minify.php -w $npm_package_DIR_work -r $npm_package_DIR_work/$npm_package_DIR_raw
    [ghs-produktiv] => npm-run-all ghs-produktiv-*
    [ghs-produktiv-mkdir] => php bin/writeVersion.php -w $npm_package_DIR_target
    [ghs-produktiv-copy] => cross-env-shell shx cp $npm_package_DIR_work/*.{css,map} $npm_package_DIR_target/$npm_package_DIR_css/
    [ghs-produktiv-copyRaw] => cross-env-shell shx cp $npm_package_DIR_work/$npm_package_DIR_raw/* $npm_package_DIR_target/$npm_package_DIR_raw/
    [ghs-ftp] => npm-run-all ghs-ftp-*
    [ghs-ftp-mkdir] => php bin/writeVersion.php -w $npm_package_DIR_ftp -c
    [ghs-ftp-copy] => cross-env-shell shx cp $npm_package_DIR_work/*.{css,map} $npm_package_DIR_work/$npm_package_DIR_ftp/$npm_package_DIR_css
    [ghs-ftp-copyRaw] => cross-env-shell shx cp $npm_package_DIR_work/$npm_package_DIR_raw/*.{css,map} $npm_package_DIR_work/$npm_package_DIR_ftp/$npm_package_DIR_raw
    [ghs-upload] => php ./bin/FTPRecursiveFolderUpload.php
)
```

