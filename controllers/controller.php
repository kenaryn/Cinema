<?php

declare(strict_types=1);

namespace Cinema;

use \Cinema\Movie as Movie;
use \Cinema\Actor as Actor;
use \Cinema\Filmmaker as Real;
// require_once './models/filmmaker.php';

// $nolan = new \Cinema\Filmmaker('Christopher', 'Nolan');
$nolan = new Real('Christopher', 'Nolan');

ob_start();
include_once './templates/view_filmmaker.php';
$contents = ob_get_contents();
ob_end_clean();
include_once './templates/baseline.php';
