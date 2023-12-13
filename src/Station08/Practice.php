<?php

namespace Src\Station08;

class Practice
{
    public function main(): void
    {
        $animals = [
            ['アザラシ', 'アライグマ'],
            ['ウサギ', 'ウシ', 'ウマ'],
            ['オオカミ', 'オットセイ']
        ];

        $newArray = [];
        $newArray[] = $animals[0];
        $newArray[] = $animals[2];
        $newArray[] = $animals[1];

        $newArray[1][0] = 'イヌ';
        $newArray[1][1] = 'イルカ';
    }
}

(new Practice())->main();
