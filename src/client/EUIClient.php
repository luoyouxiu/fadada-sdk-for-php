<?php
namespace Lyx\FadadaSdkForPhp\Client;
use Lyx\FadadaSdkForPhp\Bean\req\eui\AppPageResourceUrlReq;
use Lyx\FadadaSdkForPhp\Bean\req\eui\GetBillUrlReq;
use Lyx\FadadaSdkForPhp\Bean\req\eui\GetUsageAvailablenumReq;
use Lyx\FadadaSdkForPhp\Bean\req\eui\UserPageResourceUrlReq;
use Lyx\FadadaSdkForPhp\Constants\OpenApiConfigConstants;
use Lyx\FadadaSdkForPhp\Constants\OpenApiUrlConstants;


class EUIClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }


    # 获取应用级资源访问链接
    /**
     * @param $accessToken
     * @param AppPageResourceUrlReq $req
     * @return mixed
     * @deprecated 5.3.0.0824 弃用方法
     */
    function getAppPageResourceUrl($accessToken,AppPageResourceUrlReq $req)
    {
        return $this->client->request($accessToken,  json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APP_PAGE_RESOURCE_GET_URL);
    }

    # 获取用户级资源访问链接
    /**
     * @param $accessToken
     * @param UserPageResourceUrlReq $req
     * @return mixed
     * @deprecated 5.3.0.0824 弃用方法
     */
    function getUserPageResourceUrl($accessToken,UserPageResourceUrlReq $req)
    {
        return $this->client->request($accessToken,  json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::USER_PAGE_RESOURCE_GET_URL);
    }


    /**
     * @param $self
     * @return string
     * @deprecated 5.3.0.0824 弃用方法
     */
    private function getEuiDomain($self): string
    {
        $domain = array(
            "https://sit-api.fadada.com/api/v5/"=>"https://".OpenApiConfigConstants::APP_ID.".sit-e.fadada.com/authorize/list?",
            "https://uat-api.fadada.com/api/v5/"=>"https://".OpenApiConfigConstants::APP_ID.".uat-e.fadada.com/authorize/list?",
            "https://api.fadada.com/api/v5/"=>"https://".OpenApiConfigConstants::APP_ID.".e.fadada.com/authorize/list?"
        );
        return $domain[$self] ;
    }

    # 获取计费链接
    function get_bill_url($accessToken, GetBillUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::BILLING_GET_BILL_URL);
    }

    # 查询账户可用余量
    function getUsageAvailablenum($accessToken, GetUsageAvailablenumReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::BILLING_ACCOUNT_GET_USAGE_AVAILABLENUM);
    }


}
