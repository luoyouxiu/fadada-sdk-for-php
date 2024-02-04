<?php
namespace Lyx\FadadaSdkForPhp\Bean\req\signTask;

require_once '../signTask/SignTaskBaseReq.php';

class DeleteActorReq extends SignTaskBaseReq
{
    public $actorType;

    public $actorIds;

    /**
     * @return mixed
     */
    public function getActorType()
    {
        return $this->actorType;
    }

    /**
     * @param mixed $actorType
     */
    public function setActorType($actorType)
    {
        $this->actorType = $actorType;
    }

    /**
     * @return mixed
     */
    public function getActorIds()
    {
        return $this->actorIds;
    }

    /**
     * @param mixed $actorIds
     */
    public function setActorIds($actorIds)
    {
        $this->actorIds = $actorIds;
    }


}