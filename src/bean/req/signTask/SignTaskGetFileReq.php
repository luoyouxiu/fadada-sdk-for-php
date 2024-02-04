<?php
namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\signTask;
require_once '../signTask/SignTaskBaseReq.php';
class SignTaskGetFileReq extends SignTaskBaseReq
{
    public $docId;

    /**
     * @return mixed
     */
    public function getDocId()
    {
        return $this->docId;
    }

    /**
     * @param mixed $docId
     */
    public function setDocId($docId)
    {
        $this->docId = $docId;
    }

}
