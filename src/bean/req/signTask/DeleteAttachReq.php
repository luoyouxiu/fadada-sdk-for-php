<?php
namespace Lyx\FadadaSdkForPhp\Bean\req\signTask;

require_once '../signTask/SignTaskBaseReq.php';

class DeleteAttachReq extends SignTaskBaseReq
{
    public $attachIds;

    /**
     * @return mixed
     */
    public function getAttachIds()
    {
        return $this->attachIds;
    }

    /**
     * @param mixed $attachIds
     */
    public function setAttachIds($attachIds)
    {
        $this->attachIds = $attachIds;
    }


}
