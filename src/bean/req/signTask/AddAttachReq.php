<?php
namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\signTask;

require_once '../signTask/SignTaskBaseReq.php';

class AddAttachReq extends SignTaskBaseReq
{
    public $attachs;

    /**
     * @return mixed
     */
    public function getAttachs()
    {
        return $this->attachs;
    }

    /**
     * @param mixed $attachs
     */
    public function setAttachs($attachs)
    {
        $this->attachs = $attachs;
    }


}