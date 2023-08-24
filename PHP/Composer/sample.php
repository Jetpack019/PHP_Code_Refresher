<?php
require 'vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Level;

$log = new Logger('my_log');
$log->pushHandler(new StreamHandler('my.log',Level::Warning));
$log->warning('This is a warning message');

?>