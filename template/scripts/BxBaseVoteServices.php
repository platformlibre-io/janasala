<?php defined('BX_DOL') or die('hack attempt');
/**
 * Copyright (c) UNA, Inc - https://una.io
 * MIT License - https://opensource.org/licenses/MIT
 *
 * @defgroup    UnaBaseView UNA Base Representation Classes
 * @{
 */

/**
 * System services related to Votes.
 */
class BxBaseVoteServices extends BxDol
{
    public function __construct()
    {
        parent::__construct();
    }

    public function serviceDo($aParams)
    {
        if(is_string($aParams))
            $aParams = json_decode($aParams, true);

        if(!$aParams['s'] || !$aParams['o'])
            return ['code' => 1];

        $oVote = BxDolVote::getObjectInstance($aParams['s'], $aParams['o']);
        if(!$oVote)
            return ['code' => BX_DOL_OBJECT_ERR_NOT_AVAILABLE];

        $sMethod = 'serviceDo' . bx_gen_method_name($oVote->getType());
        if(method_exists($this, $sMethod))
            return $this->$sMethod($aParams, $oVote);

        $aResult = $oVote->vote($aParams);
        if((int)$aResult['code'] != 0)
            return $aResult;

        return [
            'is_voted' => $aResult['voted'],
            'is_disabled' => $aResult['disabled'],
            'icon' => !empty($aResult['label_emoji']) ? $aResult['label_emoji'] : $aDefaultInfo['emoji'],
            'title' => !empty($aResult['label_title']) ? $aResult['label_title'] : '',
            'counter' => $oVote->getVote()
        ];
    }

    public function serviceDoReactions($aParams, &$oVote)
    {
        $aResult = $oVote->vote($aParams);
        if((int)$aResult['code'] != 0)
            return $aResult;

        $aDefault = $oVote->getReaction($oVote->getDefault());
        $aDefaultInfo = $oVote->getReaction($aDefault['name']);

        return [
            'is_voted' => $aResult['voted'],
            'is_disabled' => $aResult['disabled'],
            'reaction' => $aResult['reaction'],
            'icon' => !empty($aResult['label_emoji']) ? $aResult['label_emoji'] : $aDefaultInfo['emoji'],
            'title' => !empty($aResult['label_title']) ? $aResult['label_title'] : '',
            'counter' => $oVote->getVote()
        ];
    }
}

/** @} */
