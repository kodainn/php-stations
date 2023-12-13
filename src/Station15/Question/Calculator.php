<?php

namespace Src\Station15\Question;

class Calculator
{
    public function multiply($multiplieds, $multiplier)
    {
        if (empty($multiplieds)) {
            return false;
        }
        
        $newArray = array_map(function ($value) use ($multiplier) {
            return $value * $multiplier;
        }, $multiplieds);

        return $newArray;
    }
}
