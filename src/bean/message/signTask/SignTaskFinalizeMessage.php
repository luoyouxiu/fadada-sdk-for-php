<?php
namespace Lyx\FadadaSdkForPhp\Bean\message\signTask;

/**
 * 签署任务定稿事件
 * 签署任务定稿之后，通过该事件回调给应用，通过该事件回调给应用，事件ID: sign-task-finalize
 *
 * 自动定稿情况下不会触发定稿事件。
 */
class SignTaskFinalizeMessage extends MessageBase
{
    public $signTaskId;
    public $signTaskStatus;
    public $transReferenceId;

    /**
     * @return mixed
     */
    public function getSignTaskId()
    {
        return $this->signTaskId;
    }

    /**
     * @param mixed $signTaskId
     */
    public function setSignTaskId($signTaskId)
    {
        $this->signTaskId = $signTaskId;
    }

    /**
     * @return mixed
     */
    public function getSignTaskStatus()
    {
        return $this->signTaskStatus;
    }

    /**
     * @param mixed $signTaskStatus
     */
    public function setSignTaskStatus($signTaskStatus)
    {
        $this->signTaskStatus = $signTaskStatus;
    }

    /**
     * @return mixed
     */
    public function getTransReferenceId()
    {
        return $this->transReferenceId;
    }

    /**
     * @param mixed $transReferenceId
     */
    public function setTransReferenceId($transReferenceId)
    {
        $this->transReferenceId = $transReferenceId;
    }

}
