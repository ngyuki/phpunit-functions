# PHPUnit Functions.php auto loader

PHPUnit contains `Functions.php` for shorthand of assertion.

```php
// normally
$this->assertThat($actual, $this->equalTo($expect));

// shorthand
assertThat($actual, equalTo($expect));
```

This is very useful, but you need to explicitly load `Functions.php`.

```php
// I need to know location of Functions.php
require_once __DIR__ . '/vendor/phpunit/phpunit/src/Framework/Assert/Functions.php';
```

This is more difficult when running phpunit with phar.

```php
// I need to know phar filename
require_once 'phar://phpunit-6.2.phar/phpunit/Framework/Assert/Functions.php';
```

If you add `ngyuki/phpunit-functions` to your project, `Functions.php` will be loaded automatically.

```sh
composer require --dev ngyuki/phpunit-functions
```

Enjoy Testing!
