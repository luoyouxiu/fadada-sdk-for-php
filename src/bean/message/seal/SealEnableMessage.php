<?php
namespace Lyx\FadadaSdkForPhp\Bean\message\seal;

/**
 * 印章启用事件
 * 企业将印章启用，通过该事件回调给应用，事件ID：seal-enable
 */
class SealEnableMessage extends MessageBase
{
    public $openCorpId;
    public $sealId;
    public $clientCorpId;

    /**
     * @return mixed
     */
    public function getOpenCorpId()
    {
        return $this->openCorpId;
    }

    /**
     * @param mixed $openCorpId
     */
    public function setOpenCorpId($openCorpId)
    {
        $this->openCorpId = $openCorpId;
    }

    /**
     * @return mixed
     */
    public function getSealId()
    {
        return $this->sealId;
    }

    /**
     * @param mixed $sealId
     */
    public function setSealId($sealId)
    {
        $this->sealId = $sealId;
    }

    /**
     * @return mixed
     */
    public function getClientCorpId()
    {
        return $this->clientCorpId;
    }

    /**
     * @param mixed $clientCorpId
     */
    public function setClientCorpId($clientCorpId)
    {
        $this->clientCorpId = $clientCorpId;
    }

}
