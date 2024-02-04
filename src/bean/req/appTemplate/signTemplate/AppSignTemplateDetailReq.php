<?php
namespace Lyx\FadadaSdkForPhp\Bean\req\appTemplate\signTemplate;

class AppSignTemplateDetailReq
{
    public $appSignTemplateId;

    /**
     * @return mixed
     */
    public function getAppSignTemplateId()
    {
        return $this->appSignTemplateId;
    }

    /**
     * @param mixed $appSignTemplateId
     */
    public function setAppSignTemplateId($appSignTemplateId)
    {
        $this->appSignTemplateId = $appSignTemplateId;
    }


}
