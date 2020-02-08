<?php
require __DIR__ . '/../vendor/autoload.php';

if (class_exists(PHPUnit_Runner_Version::class)) {
    $v = PHPUnit_Runner_Version::id();
}
else {
    $v = PHPUnit\Runner\Version::id();
}
list($v)= explode('.', $v);
define('PHPUNIT_MAJOR', (int)$v);
