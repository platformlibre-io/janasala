<?php
/**
 * Copyright (c) UNA, Inc - https://una.io
 * MIT License - https://opensource.org/licenses/MIT
 */

$aConfig = array(
    /**
     * Main Section.
     */
    'title' => 'Discussions',
    'version_from' => '12.0.0',
    'version_to' => '12.0.1',
    'vendor' => 'BoonEx',

    'compatible_with' => array(
        '12.0.0-B2'
    ),

    /**
     * 'home_dir' and 'home_uri' - should be unique. Don't use spaces in 'home_uri' and the other special chars.
     */
    'home_dir' => 'boonex/forum/updates/update_12.0.0_12.0.1/',
    'home_uri' => 'forum_update_1200_1201',

    'module_dir' => 'boonex/forum/',
    'module_uri' => 'forum',

    'db_prefix' => 'bx_forum_',
    'class_prefix' => 'BxForum',

    /**
     * Installation/Uninstallation Section.
     */
    'install' => array(
        'execute_sql' => 1,
        'update_files' => 1,
        'update_languages' => 1,
        'clear_db_cache' => 1,
    ),

    /**
     * Category for language keys.
     */
    'language_category' => 'Discussions',

    /**
     * Files Section
     */
    'delete_files' => array(),
);
