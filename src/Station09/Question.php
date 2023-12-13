<?php

namespace Src\Station09;

class Question
{
    public function main(): array
    {
        $users = [
            [
                'id' => 1,
                'last_name' => '山田',
                'first_name' => '太郎',
                'age' => 20,
                'password' => 'yamada',
            ],
            [
                'id' => 2,
                'last_name' => '鈴木',
                'first_name' => '次郎',
                'password' => 'suzuki',
            ],
            [
                'id' => 3,
                'last_name' => '佐藤',
                'first_name' => '花子',
                'password' => 'sato',
            ],
        ];

        $newArray = array_map(function ($value) {
            $newValue = $value;
            $newValue['full_name'] = $value['last_name'] . $value['first_name'];
            if (!isset($newValue['age'])) {
                $newValue['age'] = null;
            }
            unset($newValue['password']);

            return $newValue;
        }, $users);

        return $newArray;
    }
}
