<?php

namespace Config;

use CodeIgniter\Settings\Config\Settings as BaseSettings;

class Settings extends BaseSettings {
  /**
   * Set to true if you want to use the Settings library
   */
  public bool $enabled = true;

  /**
   * --------------------------------------------------------------------------
   * Handler
   * --------------------------------------------------------------------------
   *
   * The handler class to use for storing and retrieving values.
   *
   * @var string
   */
  public string $handler = 'CodeIgniter\Settings\Handlers\DatabaseHandler';

  /**
   * --------------------------------------------------------------------------
   * Table Name
   * --------------------------------------------------------------------------
   *
   * The name of the table to store settings in, if using DatabaseHandler.
   *
   * @var string
   */
  public string $table = 'settings';

  /**
   * --------------------------------------------------------------------------
   * Cache Duration
   * --------------------------------------------------------------------------
   *
   * The number of seconds to cache settings for.
   * Use 0 to always pull fresh settings.
   *
   * @var int
   */
  public int $cacheDuration = 300;
}