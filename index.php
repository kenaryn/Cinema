<?php

declare(strict_types=1);

mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
$utf_set = ini_set('default_charset', 'utf-8');
if (!$utf_set) {
  throw new Exception('Could not load default_charset to utf-8!');
}

require '/home/aurele/.config/composer/vendor/autoload.php';
require_once './controllers/controller.php';
