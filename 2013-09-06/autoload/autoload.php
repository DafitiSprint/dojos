<?php

define('APPLICATION_PATH', __DIR__);

$includePaths = explode(PATH_SEPARATOR, get_include_path());
$includePaths[] = APPLICATION_PATH . DIRECTORY_SEPARATOR . 'src';
set_include_path(
    implode(PATH_SEPARATOR, $includePaths)
);

spl_autoload_register('loader', true);

function loader($className) {
    echo "\n\nCarregando classse " . $className . ".php\n";
    include_once $className . ".php";
}