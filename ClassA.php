<?php

class ClassA
{
    private static $someVariable = null;

    public static function setVariable($newValue)
    {
        if (!isset(self::$someVariable)){
            self::$someVariable = $newValue;
        }
    }

    public static function getVariable()
    {
        return self::$someVariable;
    }
} 