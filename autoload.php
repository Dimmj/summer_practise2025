<?php
$my_autoloader = function (string $class_name) {
    include __DIR__ . '/classes/' . $class_name . '.php';
};


spl_autoload_register($my_autoloader);
