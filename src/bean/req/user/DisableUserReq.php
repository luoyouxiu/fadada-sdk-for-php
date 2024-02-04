<?php

namespace Lyx\FadadaSdkForPhp\Bean\req\user;

class DisableUserReq
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
