<?php

defined('APPLICATION_PATH') || define('APPLICATION_PATH', __DIR__ . '/');
defined('CONFIG_PATH') || define('CONFIG_PATH', APPLICATION_PATH . '/config/');

defined('KERISY_ENV') || define('KERISY_ENV', 'development');

$app = new Kerisy\Core\Application();

return $app;
