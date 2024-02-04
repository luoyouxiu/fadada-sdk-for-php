<?php
namespace Lyx\FadadaSdkForPhp\Bean\req\org\member;
require_once "MemberBaseReq.php";

class MemberDeleteReq extends MemberBaseReq
{
    public $memberIds;

    /**
     * @return mixed
     */
    public function getMemberIds()
    {
        return $this->memberIds;
    }

    /**
     * @param mixed $memberIds
     */
    public function setMemberIds($memberIds)
    {
        $this->memberIds = $memberIds;
    }


}
