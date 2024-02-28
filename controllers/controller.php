<?php

declare(strict_types=1);

use \Cinema\Movie as Movie;
use \Cinema\Actor as Actor;
use \Cinema\Filmmaker as Filmmaker;

$nolan = new Filmmaker('Christopher', 'Nolan');

ob_start();
include_once './templates/view_filmmaker.php';
$contents = ob_get_contents();
ob_end_clean();
include_once './templates/baseline.php';
