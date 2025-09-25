<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->files()
    ->in([
        __DIR__ . '/app/',
        __DIR__ . '/tests/',
    ])
    ->exclude([
        'build',
        'Views',
    ])
    ->notPath('app/Config/Routes.php');

return (new Config())
    ->setFinder($finder)
    ->setRules([
        '@PSR12' => true,
        'declare_strict_types' => true,
        'void_return' => true,
        'blank_line_after_opening_tag' => false,
        'linebreak_after_opening_tag' => false,
    ])
    ->setCacheFile('build/.php-cs-fixer.cache');
