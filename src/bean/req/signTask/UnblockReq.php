<?php

namespace Lyx\FadadaSdkForPhp\Bean\req\signTask;
require_once '../signTask/SignTaskBaseReq.php';

class UnblockReq extends SignTaskBaseReq
{

    public $actorId;


    /**
     * @return mixed
     */
    public function getActorId()
    {
        return $this->actorId;
    }

    /**
     * @param mixed $actorId
     */
    public function setActorId($actorId)
    {
        $this->actorId = $actorId;
    }


}
