<?php

namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\signTask;

require_once '../signTask/SignTaskBaseReq.php';
class BlockReq extends SignTaskBaseReq
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
