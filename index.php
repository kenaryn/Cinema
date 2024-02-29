<?php

declare(strict_types=1);

// Clear the browser cache.
header('Clear-Site-Data: "cache", "cookies", "storage", "executionContexts"');

// header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
// header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
// header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
// header("Cache-Control: post-check=0, pre-check=0", false);
// header("Pragma: no-cache");

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
$utf_set = ini_set('default_charset', 'utf-8');
if (!$utf_set) {
  throw new Exception('Could not load default_charset to utf-8!');
}

require '/srv/www/apache/src/vendor/autoload.php';
require_once './controllers/controller.php';
