<?php

$cmd = './vendor/bin/php-cs-fixer fix --dry-run ./src/Station18/Question/Question.php --config=./src/Station18/Question/.php-cs-fixer.php';
exec($cmd, $result);

var_dump($result[1]);

var_dump(str_starts_with($result[1], 'Found 0 of 1 files that can be fixed'));
