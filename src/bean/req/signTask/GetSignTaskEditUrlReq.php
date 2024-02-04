<?php

namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\signTask;
require_once '../signTask/SignTaskBaseReq.php';

class GetSignTaskEditUrlReq extends SignTaskBaseReq
{
    public $nonEditableInfo;

    /**
     * @return mixed
     */
    public function getNonEditableInfo()
    {
        return $this->nonEditableInfo;
    }

    /**
     * @param mixed $nonEditableInfo
     */
    public function setNonEditableInfo($nonEditableInfo)
    {
        $this->nonEditableInfo = $nonEditableInfo;
    }


}
