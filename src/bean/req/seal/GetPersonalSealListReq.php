<?php
namespace Lyx\FadadaSdkForPhp\Bean\req\seal;
class GetPersonalSealListReq
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
