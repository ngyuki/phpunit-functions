<?php
if (PHPUNIT_MAJOR === 6 || PHPUNIT_MAJOR === 7 || PHPUNIT_MAJOR === 8) {
    class PHPUnit6Test extends PHPUnit\Framework\TestCase
    {
        public function test()
        {
            \assertThat(123, \equalTo(123));
        }
    }
}
