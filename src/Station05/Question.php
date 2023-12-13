<?php

namespace Src\Station05;

class Question
{
    public function main(): int
    {
        $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $sum = 0;
        foreach ($array as $v) {
            if ($v%4 > 2) {
                continue;
            }
            if ($v >= 8) {
                break;
            }
            $sum += $v;
        }
        return $sum;
    }
}
