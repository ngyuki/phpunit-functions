<?php
use function PHPUnit\Framework\assertThat;
use function PHPUnit\Framework\equalTo;

if (PHPUNIT_MAJOR >= 9) {
    class PHPUnit9Test extends PHPUnit\Framework\TestCase
    {
        public function test()
        {
            assertThat(123, equalTo(123));
        }
    }
}
