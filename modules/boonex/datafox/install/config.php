<?php
/**
 * Copyright (c) UNA, Inc - https://una.io
 * MIT License - https://opensource.org/licenses/MIT
 *
 * @defgroup    DataFox Data Fox API integration
 * @ingroup     UnaModules
 *
 * @{
 */

$aConfig = array(
    /**
     * Main Section.
     */
    'type' => BX_DOL_MODULE_TYPE_MODULE,
    'name' => 'bx_datafox',
    'title' => 'Data Fox',
    'note' => 'Data Fox API integration.',
    'version' => '12.0.1.RC1',
    'vendor' => 'BoonEx',
    'help_url' => 'http://feed.una.io/?section={module_name}',

    'compatible_with' => array(
        '12.0.x'
    ),

    /**
     * 'home_dir' and 'home_uri' - should be unique. Don't use spaces in 'home_uri' and the other special chars.
     */
    'home_dir' => 'boonex/datafox/',
    'home_uri' => 'datafox',

    'db_prefix' => 'bx_datafox_',
    'class_prefix' => 'BxDataFox',

    /**
     * Category for language keys.
     */
    'language_category' => 'Data Fox',

    /**
     * Installation/Uninstallation Section.
     */
    'install' => array(
        'execute_sql' => 1,
        'update_languages' => 1,
    ),
    'uninstall' => array (
        'execute_sql' => 1,
        'update_languages' => 1,
    ),
    'enable' => array(
        'execute_sql' => 1,
        'clear_db_cache' => 1,
    ),
    'disable' => array(
        'execute_sql' => 1,
        'clear_db_cache' => 1,
    ),

    /**
     * Dependencies Section
     */
    'dependencies' => array(),
);

/** @} */
