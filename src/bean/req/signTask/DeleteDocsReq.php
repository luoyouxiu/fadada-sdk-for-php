<?php

namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\signTask;
require_once '../signTask/SignTaskBaseReq.php';

class DeleteDocsReq extends SignTaskBaseReq
{
    public $docIds;

    /**
     * @return mixed
     */
    public function getDocIds()
    {
        return $this->docIds;
    }

    /**
     * @param mixed $docIds
     */
    public function setDocIds($docIds)
    {
        $this->docIds = $docIds;
    }


}
