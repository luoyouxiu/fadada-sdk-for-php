<?php

namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\user;

class GetUserIdentityInfoReq
{
    public $openUserId;

    /**
     * @return mixed
     */
    public function getOpenUserId()
    {
        return $this->openUserId;
    }

    /**
     * @param mixed $openUserId
     */
    public function setOpenUserId($openUserId)
    {
        $this->openUserId = $openUserId;
    }

}
