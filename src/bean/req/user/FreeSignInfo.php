<?php

namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\user;

class FreeSignInfo
{
    public $businessId;

    /**
     * @return mixed
     */
    public function getBusinessId()
    {
        return $this->businessId;
    }

    /**
     * @param mixed $businessId
     */
    public function setBusinessId($businessId)
    {
        $this->businessId = $businessId;
    }

}
