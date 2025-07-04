<?php

declare(strict_types=1);

namespace Config;

use CodeIgniter\Config\BaseConfig;

class MyApp extends BaseConfig
{
    /**
     * The name of the current theme.
     * Must be within /themes directory.
     */
    public string $themeName = 'default';

    /**
     * The number of seconds after which
     * alert will be removed.
     */
    public int $alertDisplayTime = 5;
}
