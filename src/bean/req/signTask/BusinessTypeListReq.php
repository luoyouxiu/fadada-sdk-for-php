<?php

namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\signTask;

class BusinessTypeListReq
{
    public $openCorpId;

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

}
