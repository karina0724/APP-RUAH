<?php
namespace controllers;

require_once('core/Config.php');

use core\Db;
use core\Params;

$test = Db::init(Params::SQL_HOSTNAME, Params::SQL_USERNAME, Params::SQL_PASSWORD, Params::SQL_DATABASE);
echo $test;
