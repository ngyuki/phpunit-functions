<?php
if (PHPUNIT_MAJOR <= 5) {
    class PHPUnit5Test extends PHPUnit_Framework_TestCase
    {
        public function test()
        {
            \assertThat(123, \equalTo(123));
        }
    }
}
