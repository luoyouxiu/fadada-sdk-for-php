<?php

namespace Lyx\FadadaSdkForPhp\Bean\req\signTask;
require_once '../signTask/SignTaskBaseReq.php';

class ExtensionSignTaskReq extends SignTaskBaseReq
{
    public $extensionTime;

    /**
     * @return mixed
     */
    public function getExtensionTime()
    {
        return $this->extensionTime;
    }

    /**
     * @param mixed $extensionTime
     */
    public function setExtensionTime($extensionTime)
    {
        $this->extensionTime = $extensionTime;
    }

}
