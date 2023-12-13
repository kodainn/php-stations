<?php

namespace Src\Station14\Question;

class Car
{
    private const DOOR = 5;
    private static $passenger = 0;

    public static function getPassenger()
    {
        echo self::$passenger;
    }

    public static function pickup()
    {
        self::$passenger += 1;
        self::getPassenger();
    }

    public static function getDoors()
    {
        echo self::DOOR;
    }


}