<?php

namespace Src\Station17\Question;

class GuitarSound implements SoundInterface
{
    private const INSTRUMENT_NAME = 'ギター';

    public function isValidatedInput(string $scale): bool
    {
        return mb_strpos('CDEFGAB', $scale) !== false;
    }

    public function sound(string $scale): string
    {
        return $this->effect($scale);
    }

    private function effect(string $scale): string
    {
        return 'エフェクトをかけた' . self::INSTRUMENT_NAME . 'の' . $scale;
    }
}
