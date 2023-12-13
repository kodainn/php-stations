<?php

$finder = PhpCsFixer\Finder::create()->in(__DIR__);


return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR2' => true,
        'trailing_comma_in_multiline' => ['elements' => ['arrays']],
    ])
    ->setUsingCache(false)
    ->setFinder($finder);
