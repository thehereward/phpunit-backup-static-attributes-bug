<?php

/**
 * @backupStaticAttributes enabled
 */
class TestClassA extends PHPUnit_Framework_TestCase
{
    public function testCanSetVariableToString()
    {
        // given
        $value = 'aString';

        // when
        ClassA::setVariable($value);

        // then
        $this->assertEquals($value, ClassA::getVariable());
    }

    public function testCanSetVariableToInt()
    {
        // given
        $value = 5;

        // when
        ClassA::setVariable($value);

        // then
        $this->assertEquals($value, ClassA::getVariable());
    }
} 