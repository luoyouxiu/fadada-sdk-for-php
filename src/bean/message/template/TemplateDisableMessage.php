<?php

namespace LuoYouXiu\FadadaSdkForPhp\Bean\message\template;
/**
 * 模板停用事件
 * 停用模板后，通过该事件回调给应用，事件ID: template-disable
 */
class TemplateDisableMessage extends MessageBase
{
    public $openCorpId;
    public $templateId;
    public $type;
    public $clientCorpId;

    /**
     * @return mixed
     */
    public function getOpenCorpId()
    {
        return $this->openCorpId;
    }

    /**
     * @param mixed $openCorpId
     */
    public function setOpenCorpId($openCorpId)
    {
        $this->openCorpId = $openCorpId;
    }

    /**
     * @return mixed
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * @param mixed $templateId
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getClientCorpId()
    {
        return $this->clientCorpId;
    }

    /**
     * @param mixed $clientCorpId
     */
    public function setClientCorpId($clientCorpId)
    {
        $this->clientCorpId = $clientCorpId;
    }
}
