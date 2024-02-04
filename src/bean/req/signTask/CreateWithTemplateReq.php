<?php

namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\signTask;


require_once '../signTask/SignTaskBaseReq.php';


class CreateWithTemplateReq extends CreateSignTaskBaseReq
{
    public $signTemplateId;

    /**
     * @return mixed
     */
    public function getSignTemplateId()
    {
        return $this->signTemplateId;
    }

    /**
     * @param mixed $signTemplateId
     */
    public function setSignTemplateId($signTemplateId)
    {
        $this->signTemplateId = $signTemplateId;
    }


}