<?php

namespace Lyx\FadadaSdkForPhp\Bean\req\tool\identity;

class BusinessInfoQueryReq
{
    public $corpName;

    public $corpIdentNo;

    /**
     * @return mixed
     */
    public function getCorpName()
    {
        return $this->corpName;
    }

    /**
     * @param mixed $corpName
     */
    public function setCorpName($corpName)
    {
        $this->corpName = $corpName;
    }

    /**
     * @return mixed
     */
    public function getCorpIdentNo()
    {
        return $this->corpIdentNo;
    }

    /**
     * @param mixed $corpIdentNo
     */
    public function setCorpIdentNo($corpIdentNo)
    {
        $this->corpIdentNo = $corpIdentNo;
    }

}
