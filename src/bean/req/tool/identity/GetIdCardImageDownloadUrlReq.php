<?php

namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\tool\identity;

class GetIdCardImageDownloadUrlReq
{
    public $verifyId;

    /**
     * @return mixed
     */
    public function getVerifyId()
    {
        return $this->verifyId;
    }

    /**
     * @param mixed $verifyId
     */
    public function setVerifyId($verifyId)
    {
        $this->verifyId = $verifyId;
    }


}
