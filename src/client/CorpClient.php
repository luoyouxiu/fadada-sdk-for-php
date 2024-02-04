<?php
namespace Lyx\FadadaSdkForPhp\Client;
use Lyx\FadadaSdkForPhp\Bean\req\corp\AppGetOpenIdListReq;
use Lyx\FadadaSdkForPhp\Bean\req\corp\DisableCorpReq;
use Lyx\FadadaSdkForPhp\Bean\req\corp\EnableCorpReq;
use Lyx\FadadaSdkForPhp\Bean\req\corp\GetCorpAuthUrlReq;
use Lyx\FadadaSdkForPhp\Bean\req\corp\GetCorpIdentifiedStatusReq;
use Lyx\FadadaSdkForPhp\Bean\req\corp\GetCorpIdentityInfoReq;
use Lyx\FadadaSdkForPhp\Bean\req\corp\GetCorpReq;
use Lyx\FadadaSdkForPhp\Bean\req\corp\UnbindCorpReq;
use Lyx\FadadaSdkForPhp\Constants\OpenApiUrlConstants;

require_once 'Fdd.Sdk.IClient.php';
require_once '../constants/OpenApiUrlConstants.php';

class CorpClient
{

    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 查询授权用户列表
    function appGetOpenIdList($accessToken, AppGetOpenIdListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::APP_GET_OPENID_LIST);
    }

    # 获取企业用户授权链接
    function getCorpAuthUrl($accessToken, GetCorpAuthUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CORP_GET_AUTH_URL);
    }

    # 禁用企业用户
    function disable($accessToken,DisableCorpReq $req)
    {
        return $this->client->request($accessToken,  json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_DISABLE);
    }

    # 恢复企业用户
    function enable($accessToken,EnableCorpReq $req)
    {
        return $this->client->request($accessToken,  json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_ENABLE);
    }

    # 解除企业用户授权
    function unbind($accessToken,UnbindCorpReq $req)
    {
        return $this->client->request($accessToken,  json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_UNBIND);
    }

    # 查询企业用户基本信息
    function getDetail($accessToken, GetCorpReq $req)
    {
        return $this->client->request($accessToken,  json_encode($req), OpenApiUrlConstants::CORP_GET_DETAIL);
    }

    # 获取企业用户身份信息
    function getIdentityInfo($accessToken,GetCorpIdentityInfoReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CORP_GET_IDENTITY_INFO);
    }

    # 查询企业实名认证状态
    function getIdentifiedStatus($accessToken,GetCorpIdentifiedStatusReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CORP_GET_IDENTIFIED_STATUS);
    }


}
