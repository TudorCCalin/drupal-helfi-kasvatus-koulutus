<?php

/**
 * @file
 * Contains site specific overrides.
 */

$databases['default']['default'] = [
  'init_commands' => [
    'sql_mode' => 'SET sql_mode="STRICT_TRANS_TABLES,STRICT_ALL_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,TRADITIONAL,NO_ENGINE_SUBSTITUTION"',
  ],
];
