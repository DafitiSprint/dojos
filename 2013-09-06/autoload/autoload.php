<?php

define('APPLICATION_PATH', __DIR__);

$includePaths = explode(PATH_SEPARATOR, get_include_path());
$includePaths[] = APPLICATION_PATH . DIRECTORY_SEPARATOR . 'src';
set_include_path(
    implode(PATH_SEPARATOR, $includePaths)
);

spl_autoload_extensions('.php5,.php');
spl_autoload_register('loader', true);

function loader($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    echo "\n\nCarregando classse " . $className . ".\n";
    include_once $className . ".php5";
}
