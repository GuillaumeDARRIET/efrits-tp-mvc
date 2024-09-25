<?php

define('ROOT', realpath(__DIR__));
define('DB_HOST', 'localhost');
define('DB_USER', 'efrits_mvc');
define('DB_PASS', 'IGeg815UBneKUTC8451');
define('DB_NAME', 'efrits_mvc');

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once(ROOT.'/core/Database.php');

DB::setup(DB_HOST, DB_USER, DB_PASS, DB_NAME);