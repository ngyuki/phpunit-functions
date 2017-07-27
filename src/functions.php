<?php
call_user_func(function () {
    if (class_exists('PHPUnit\\Framework\\Assert')) {
        $reflection = new ReflectionClass('PHPUnit\\Framework\\Assert');
    } elseif (class_exists('PHPUnit_Framework_Assert')) {
        $reflection = new ReflectionClass('PHPUnit_Framework_Assert');
    } else {
        // no phpunit execution
        return;
    }

    // skip ForwardCompatibility for PHPUnit 4/5
    while ($reflection->getParentClass()) {
        $reflection = $reflection->getParentClass();
    }

    $file = dirname($reflection->getFileName()) . '/Assert/Functions.php';

    if (file_exists($file)) {
        /** @noinspection PhpIncludeInspection */
        require_once $file;
}});
