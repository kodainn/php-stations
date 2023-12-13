<?php

namespace Src\Station16\Question;

class Question
{
    public function main(string $humanName, string $carName, int $passengers): void
    {
        $car = new Car($carName);
        $human = new Human($humanName);

        $human->buyCar($car);

        $car->run();
        echo $car->pickup($passengers);
    }
}
