<?php
require_once('defines.php');
// echo JPATH_MAIN . PHP_EOL;

#exec('cp -v ' . JPATH_MAIN . 'ghs/README-loeschen.md ' . JPATH_MAIN . 'ghs/vendor-prefixed/README-loeschen2.md');

exec('npm run ghs-rm');
exec('npm run ghs-mkdir');

echo ' 4654sd48sa7d98sD81s8d71dsa <pre>' . print_r($packageJson['DIR'], true) . '</pre>';exit;