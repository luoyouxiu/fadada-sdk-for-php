<?php

namespace LuoYouXiu\FadadaSdkForPhp\Constants;

class OpenApiConfigConstants
{
    /**
     *企业主体在应用内的的clientUserId
     */
    const clientUserId = "";
    /**
     *重定向地址
     */
    const RedirectUrl = "";
    /**
     *自动签署免签场景码
     */
    const BusinessId = "";
    /**
     * 接口请求域名
     *
     * 生产环境域名：https://api.fadada.com/api/v5/
     * 开发环境域名：https://uat-api.fadada.com/api/v5/
     *
     */
    public $SERVICE_URL = "";
    /**
     * 应用appid
     */
    public $APP_ID = "";
    /**
     * 应用秘钥
     */
    public $APP_SECRET = "";
    /**
     *企业主体在应用上的openCorpId
     */
    public $OpenCorpId = "";

    /**
     * @param string $APP_ID
     * @param string $APP_SECRET
     * @param string $SERVICE_URL
     */
    public function __construct(string $APP_ID, string $APP_SECRET, string $SERVICE_URL)
    {
        $this->APP_ID = $APP_ID;
        $this->APP_SECRET = $APP_SECRET;
        $this->SERVICE_URL = $SERVICE_URL;
    }


}
