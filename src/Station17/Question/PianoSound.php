<?php

namespace Src\Station17\Question;

class PianoSound implements SoundInterface
{
    private const INSTRUMENT_NAME = 'ピアノ';

    public function isValidatedInput(string $scale): bool
    {
        return mb_strpos('ドレミファソラシド', $scale) !== false;
    }

    public function sound(string $scale): string
    {
        return self::INSTRUMENT_NAME . 'の' . $scale;
    }
     
}