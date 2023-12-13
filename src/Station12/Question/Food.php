<?php

namespace Src\Station12\Question;

use Carbon\Carbon;

class Food extends Product
{
    // property はアクセス修飾子・型定義不問、 __construct での定義でなくとも良い
    private $useByDate;

    public function __construct($originalPrice, $useByDate)
    {
        $this->useByDate = $useByDate;
        parent::__construct($originalPrice);
    }

    public function price()
    {
        $currentDateTime = new Carbon();
        $diffSeconds = $currentDateTime->diffInSeconds($this->useByDate);
        if (($diffSeconds + 1) / (3600 * 5) < 1) {
            return floor($this->OriginalPrice / 2);
        }

        return $this->OriginalPrice;
    }
}
