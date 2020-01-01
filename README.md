`cd /mnt/z/git-kram/ghsvs_sass_compile_and_prefix/`

`npm install`

Optional: `npm run ghs-watch`

`npm run ghs-all`

===========npm run ghs-help==============
> php ./bin/help.php

* What?
- Compiles, minifies, autoprefixes *.scss files to CSS and creates source-maps.

* How to start a script
- npm run [SCRIPTKEY]

* The DIR-Array
- scss: Variable $npm_package_DIR_scss. The *.scss-directory (absolute path).
- css: Variable $npm_package_DIR_css. Directory where all the compiled, prefixed, minified CSS files are copied to after all jobs are done (absolute path).
- cssRaw: Variable $npm_package_DIR_cssRaw. Directory where all the compiled, minified, **BUT NOT PREFIXED(!)** CSS files are copied to after all jobs are done (absolute path).
- work: Variable $npm_package_DIR_work. Temporary local work directory inside same folder where package.json is located (relative path).
- raw: Variable $npm_package_DIR_raw. Temporary local directory inside work directory where not prefixed files are saved (relative path).

* npm run ghs-npm-update-check
- Check for updates for packages in package.json. Prints a list, not more.

* npm run ghs-ncu-override-json
- Check for updates for packages in package.json. AND override package.json file (newest stable versions). Don't forget to run npm install!

* npm run ghs-watch
- Starts a nodemon watcher for changes in scss directory $npm_package_DIR_scss that starts a complete, new compilation via 'npm run ghs-all' when a scss file is changed. Also starts a complete, new compilation if the watcher is started.

* npm run ghs-all
- Runs a complete job: ghs-rm ghs-mkdir ghs-compile ghs-copy-raw ghs-prefix ghs-minify ghs-produktiv

* npm run ghs-rm
- Deletes **local** work directory $npm_package_DIR_work and $npm_package_DIR_raw inside.

* npm run ghs-mkdir
- Creates **local** work directory $npm_package_DIR_work plus subdirecty $npm_package_DIR_raw.

* npm run ghs-compile
- Compiles *.scss files from $npm_package_DIR_scss to *.css files in **local** work dir $npm_package_DIR_work.

* npm run ghs-copy-raw
- Copies *.css and *.css.map to local dir $npm_package_DIR_raw.

* npm run ghs-prefix
- Runs Autoprefixer (See file '.browserslistrc'). 
- Source: All *.css files in **local** work dir $npm_package_DIR_work. 
- Target: Replaces *.css files in **local** work dir.

* npm run ghs-minify
- Minifies all *.css to *.min.css in **local** $npm_package_DIR_work and $npm_package_DIR_raw.

* npm run ghs-produktiv
- Runs several npm scripts. Makes dirs $npm_package_DIR_css and $npm_package_DIR_cssRaw in target. Copies all compiled files accordingly.

