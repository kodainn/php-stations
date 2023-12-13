<?php

namespace Src\Station06;

class Practice3
{
    public function main(): void
    {
        $colors = ['red', 'blue', 'yellow'];
        array_unshift($colors, 'white', 'black');
        array_splice($colors, 4, 1);
        array_splice($colors, 3, 0, 'green');
        print_r($colors);
    }
}

(new Practice3())->main();
