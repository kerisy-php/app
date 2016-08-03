<?php

defined('APPLICATION_PATH') || define('APPLICATION_PATH', __DIR__ . '/');
defined('CONFIG_PATH') || define('CONFIG_PATH', APPLICATION_PATH . '/config/');

defined('KERISY_ENV') || define('KERISY_ENV', 'development');

defined('CLI_MODE') || define('CLI_MODE', PHP_SAPI === 'cli' );

$app = new Kerisy\Core\Application\Web();

return $app;
