<?php
namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\signTask;
require_once '../signTask/SignTaskBaseReq.php';
class SignTaskCancelReq extends SignTaskBaseReq
{
    public $terminationNote;

    /**
     * @return mixed
     */
    public function getTerminationNote()
    {
        return $this->terminationNote;
    }

    /**
     * @param mixed $terminationNote
     */
    public function setTerminationNote($terminationNote)
    {
        $this->terminationNote = $terminationNote;
    }


}
