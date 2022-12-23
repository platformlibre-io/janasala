<?php
/**
 * Copyright (c) UNA, Inc - https://una.io
 * MIT License - https://opensource.org/licenses/MIT
 */

class BxCoursesUpdater extends BxDolStudioUpdater
{
    function __construct($aConfig)
    {
        parent::__construct($aConfig);
    }

    public function actionExecuteSql($sOperation)
    {
        if($sOperation == 'install') {
            if(!$this->oDb->isFieldExists('bx_courses_data', 'cover_data'))
                $this->oDb->query("ALTER TABLE `bx_courses_data` ADD `cover_data` varchar(50) NOT NULL AFTER `cover`");
        }

        return parent::actionExecuteSql($sOperation);
    }
}
