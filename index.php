<?php

require './Fw/init.php';

use Fw\Core\Config;

$config = new Config();

echo $config->get('db/login') . ' : ' . $config->get('db/pass');
