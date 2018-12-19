<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setRules([
        'visibility_required' => false,
        'array_syntax' => [
            'syntax' => 'short',
        ],
    ])
    ->setUsingCache(true)
    ->setFinder($finder)
;
