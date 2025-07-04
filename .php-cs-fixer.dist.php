<?php

declare(strict_types=1);

use CodeIgniter\CodingStandard\CodeIgniter4;
use Nexus\CsConfig\Factory;
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
    ->append([
        __FILE__,
        __DIR__ . '/rector.php',
        __DIR__ . '/psalm_autoload.php',
    ]);

$overrides = [
    'declare_strict_types' => true,
    'void_return'          => true,
];

$options = [
    'finder'    => $finder,
    'cacheFile' => 'build/.php-cs-fixer.cache',
];

// return Factory::create(new CodeIgniter4())->forProjects();

return Factory::create(new CodeIgniter4(), $overrides, $options)->forProjects();
