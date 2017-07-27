<?php
require __DIR__ . '/../vendor/autoload.php';

// for PHPUnit 6
if (!class_exists('PHPUnit_Framework_TestCase') && class_exists('PHPUnit\\Framework\\TestCase')) {
    class_alias('PHPUnit\\Framework\\TestCase', str_replace('\\', '_', 'PHPUnit\\Framework\\TestCase'));
}
