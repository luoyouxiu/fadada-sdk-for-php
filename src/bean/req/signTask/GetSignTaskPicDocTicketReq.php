<?php

namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\signTask;

class GetSignTaskPicDocTicketReq
{
    public $slicingTicketId;

    /**
     * @return mixed
     */
    public function getSlicingTicketId()
    {
        return $this->slicingTicketId;
    }

    /**
     * @param mixed $slicingTicketId
     */
    public function setSlicingTicketId($slicingTicketId)
    {
        $this->slicingTicketId = $slicingTicketId;
    }

}
