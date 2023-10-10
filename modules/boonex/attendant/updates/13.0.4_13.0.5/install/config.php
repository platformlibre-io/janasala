<?php
/**
 * Copyright (c) UNA, Inc - https://una.io
 * MIT License - https://opensource.org/licenses/MIT
 */

$aConfig = array(
    /**
     * Main Section.
     */
    'title' => 'Attendant',
    'version_from' => '13.0.4',
    'version_to' => '13.0.5',
    'vendor' => 'BoonEx',

    'compatible_with' => array(
        '13.1.0-RC1'
    ),

    /**
     * 'home_dir' and 'home_uri' - should be unique. Don't use spaces in 'home_uri' and the other special chars.
     */
    'home_dir' => 'boonex/attendant/updates/update_13.0.4_13.0.5/',
    'home_uri' => 'attendant_update_1304_1305',

    'module_dir' => 'boonex/attendant/',
    'module_uri' => 'attendant',

    'db_prefix' => 'bx_attendant_',
    'class_prefix' => 'BxAttendant',

    /**
     * Installation/Uninstallation Section.
     */
    'install' => array(
        'execute_sql' => 0,
        'update_files' => 1,
        'update_languages' => 0,
        'clear_db_cache' => 0,
    ),

    /**
     * Category for language keys.
     */
    'language_category' => 'Attendant',

    /**
     * Files Section
     */
    'delete_files' => array(),
);
