<?php
/**
 * Copyright (c) UNA, Inc - https://una.io
 * MIT License - https://opensource.org/licenses/MIT
 *
 * @defgroup    Classes Classes
 * @ingroup     UnaModules
 *
 * @{
 */

$aConfig = array(

    /**
     * Main Section.
     */
    'type' => BX_DOL_MODULE_TYPE_MODULE,
    'name' => 'bx_classes',
    'title' => 'Classes',
    'note' => 'Classes module.',
    'version' => '14.0.2.RC1',
    'vendor' => 'UNA INC',
    'help_url' => 'http://feed.una.io/?section={module_name}',

    'compatible_with' => array(
        '14.0.x'
    ),

    /**
     * 'home_dir' and 'home_uri' - should be unique. Don't use spaces in 'home_uri' and the other special chars.
     */
    'home_dir' => 'boonex/classes/',
    'home_uri' => 'classes',

    'db_prefix' => 'bx_classes_',
    'class_prefix' => 'BxClss',

    /**
     * Category for language keys.
     */
    'language_category' => 'Classes',

    /**
     * List of page triggers.
     */
    'page_triggers' => array (
    	'trigger_page_group_view_entry',
    ),
    
    /**
     * Menu triggers.
     */
    'menu_triggers' => array(
        'trigger_group_view_submenu',
    ),

    /**
     * Storage objects to automatically delete files from upon module uninstallation.
     * Note. Don't add storage objects used in transcoder objects.
     */
    'storages' => array(
        'bx_classes_covers',
    	'bx_classes_photos',
        'bx_classes_videos',
        'bx_classes_sounds',
        'bx_classes_files'
    ),

    /**
     * Transcoders.
     */
    'transcoders' => array(
        'bx_classes_preview',
        'bx_classes_gallery',
        'bx_classes_cover',

        'bx_classes_preview_photos',
        'bx_classes_gallery_photos', 

        'bx_classes_videos_poster',
        'bx_classes_videos_poster_preview',
        'bx_classes_videos_mp4',
        'bx_classes_videos_mp4_hd',

        'bx_classes_sounds_mp3',

        'bx_classes_preview_files',
        'bx_classes_gallery_files'
    ),

    /**
     * Extended Search Forms.
     */
    'esearches' => array(
        'bx_classes',
    	'bx_classes_cmts'
    ),

    /**
     * Installation/Uninstallation Section.
     */
    'install' => array(
        'execute_sql' => 1,
        'update_languages' => 1,
        'clear_db_cache' => 1,
    ),
    'uninstall' => array (
    	'process_esearches' => 1,
        'execute_sql' => 1,
        'update_languages' => 1,
        'update_relations' => 1,
        'clear_db_cache' => 1,
    ),
    'enable' => array(
        'execute_sql' => 1,
        'update_relations' => 1,
        'clear_db_cache' => 1,
    ),
    'enable_success' => array(
        'process_menu_triggers' => 1,
        'process_page_triggers' => 1,
    	'process_esearches' => 1,
        'register_transcoders' => 1,
        'clear_db_cache' => 1,
    ),
    'disable' => array (
        'execute_sql' => 1,
        'update_relations' => 1,
        'unregister_transcoders' => 1,
        'clear_db_cache' => 1,
    ),
    'disable_failed' => array (
        'register_transcoders' => 1,
        'clear_db_cache' => 1,
    ),

    /**
     * Dependencies Section
     */
    'dependencies' => array(),

    /**
     * Relations Section
     */
    'relations' => array(
    	'bx_timeline',
    	'bx_notifications'
    ),

);

/** @} */
