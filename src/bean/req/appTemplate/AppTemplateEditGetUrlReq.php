<?php
namespace LuoYouXiu\FadadaSdkForPhp\Bean\req\appTemplate;
class AppTemplateEditGetUrlReq
{
    public $appTemplateId;

    public $redirectUrl;

    /**
     * @return mixed
     */
    public function getAppTemplateId()
    {
        return $this->appTemplateId;
    }

    /**
     * @param mixed $appTemplateId
     */
    public function setAppTemplateId($appTemplateId)
    {
        $this->appTemplateId = $appTemplateId;
    }

    /**
     * @return mixed
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param mixed $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }

}
