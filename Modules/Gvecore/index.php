<?php

require_once './../../vendor/autoload.php';

use Weblab\Gvecore\GVECore;

$core = GVECore::getInstance();
$core->handleRequest();
