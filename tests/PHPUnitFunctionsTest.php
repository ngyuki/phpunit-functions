<?php
class PHPUnitFunctionsTest extends PHPUnit_Framework_TestCase
{
    public function test()
    {
        assertThat(123, equalTo(123));
    }
}
