<?php

namespace Src\Station07;

class Practice1
{
    public function main(): void
    {
        $array3 = ['apple' => 'red', 'banana' => 'yellow', 'rime' => 'green'];
        $array4 = ['strawberry' => 'pink', 'banana' => 'yellow'];
        
        $mergedArray2 = array_merge($array3, $array4);
        print_r($mergedArray2);
    }
}

(new Practice1())->main();
