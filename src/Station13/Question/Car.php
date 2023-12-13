<?php

namespace Src\Station13\Question;

class Car extends Vehicle
{
    protected function run()
    {
        $this->maxSpeed = 60;
        parent::run();
    }

    public function hazard()
    {
        echo 'ハザードランプを点灯する';
    }

    protected function back()
    {
        $this->hazard();
        parent::back();
    }
}
