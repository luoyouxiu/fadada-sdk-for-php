<?php

namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\signTask;
require_once '../signTask/SignTaskBaseReq.php';

class SignTaskIgnoreReq extends SignTaskBaseReq
{
    public $actors;

    /**
     * @return mixed
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @param mixed $actors
     */
    public function setActors($actors)
    {
        $this->actors = $actors;
    }

}
