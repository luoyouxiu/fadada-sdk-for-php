<?php

namespace Lyx\FadadaSdkForPhp\Bean\req\org\counterpart;

class CounterpartListReq
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
