<?php
namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\signTask;

class ActorCorpMember
{
    public $memberId;

    /**
     * @return mixed
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * @param mixed $memberId
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }


}
