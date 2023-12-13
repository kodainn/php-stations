<?php

namespace Src\Station17\Question;

class Keyboard
{
    public function play(SoundInterface $soundInterface, string $scale): void
    {
        if (!$soundInterface->isValidatedInput($scale)) {
            echo 'この音を鳴らすことはできません';
            return;
        }

        echo $soundInterface->sound($scale) . 'を鳴らします';
    }
}
