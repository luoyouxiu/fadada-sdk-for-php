<?php
namespace Lyx\FadadaSdkForPhp\Bean\req\appTemplate\docTemplate;

class AppDocTemplateDetailReq
{
    public $appDocTemplateId;

    /**
     * @return mixed
     */
    public function getAppDocTemplateId()
    {
        return $this->appDocTemplateId;
    }

    /**
     * @param mixed $appDocTemplateId
     */
    public function setAppDocTemplateId($appDocTemplateId)
    {
        $this->appDocTemplateId = $appDocTemplateId;
    }

}
