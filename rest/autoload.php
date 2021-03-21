<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/docs/swagger.php';

/**
 * Required files, modules & libraries.
 */
require_once __DIR__.'/config/config.php';
foreach (glob(__DIR__.'/app/utils/*.php') as $util) {
    require_once $util;
}
foreach (glob(__DIR__.'/app/routes/*.php') as $route) {
    require_once $route;
}
foreach (glob(__DIR__.'/app/models/*.php') as $model) {
    require_once $model;
}
foreach (glob(__DIR__.'/app/dao/*.php') as $dao) {
    require_once $dao;
}
foreach (glob(__DIR__.'/app/services/*.php') as $model) {
    require_once $model;
}
