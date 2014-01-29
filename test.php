<?php

require_once 'lib.php';

Class ConversionTest extends PHPUnit_Framework_TestCase {
    function test_simple() {
        $this->assertEquals([], string_to_floats(""));
        $this->assertEquals([0], string_to_floats("0"));
        $this->assertEquals([1], string_to_floats("01"));
        $this->assertEquals([0, 1], string_to_floats("0 1"));
        $this->assertEquals([9], string_to_floats("09"));
        $this->assertEquals([1.1, 2014], string_to_floats("1.1.2014"));
        $this->assertEquals([1, 2, 3], string_to_floats("a1b2c3"));
    }
}

?>
