<?php
namespace Lyx\FadadaSdkForPhp\Client;
use Lyx\FadadaSdkForPhp\Bean\req\seal\CancelPersonalSealFreeSignReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\CancelSealFreeSignReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\CreateLegalRepresentativeSealByImageReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\CreateLegalRepresentativeSealByTemplateReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\CreatePersonalSealByImageReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\CreatePersonalSealByTemplateReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\CreateSealByImageReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\CreateSealByTemplateReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\GetAppointedSealUrlReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\GetAppointedUserSealListReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\GetPersonalSealCreateUrlReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\GetPersonalSealFreeSignUrlReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\GetPersonalSealListReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\GetPersonalSealManageUrlReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\GetSealCreateUrlReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\GetSealDetailReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\GetSealFreeSignUrlReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\GetSealGrantUrlReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\GetSealListReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\GetSealManageUrlReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\GetSealTagListReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\GetSealUserListReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\GetVerifySealListReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\PersonalSealDeleteReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\SealDeleteReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\SealGrantCancelReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\SealModifyReq;
use Lyx\FadadaSdkForPhp\Bean\req\seal\SealSetStatusReq;
use Lyx\FadadaSdkForPhp\Constants\OpenApiUrlConstants;

require_once 'Fdd.Sdk.IClient.php';
require_once '../constants/OpenApiUrlConstants.php';

class SealClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 创建模板印章
    function createSealByTemplate($accessToken, CreateSealByTemplateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_CREATE_BY_TEMPLATE);
    }

    # 创建图片印章
    function createSealByImage($accessToken, CreateSealByImageReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_CREATE_BY_IMAGE);
    }

    # 创建法定代表人模板印章
    function createLegalRepresentativeSealByTemplate($accessToken, CreateLegalRepresentativeSealByTemplateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_CREATE_LEGAL_REPRESENTATIVE_BY_TEMPLATE);
    }

    # 创建法定代表人图片印章
    function createLegalRepresentativeSealByImage($accessToken, CreateLegalRepresentativeSealByImageReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_CREATE_LEGAL_REPRESENTATIVE_BY_IMAGE);
    }

    # 获取印章管理链接
    function getSealManageUrl($accessToken, GetSealManageUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_MANAGE_GET_URL);
    }

    # 获取设置企业印章免验证签链接
    function getSealFreeSignUrl($accessToken, GetSealFreeSignUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_FREE_SIGN_GET_URL);
    }

    # 获取印章创建链接
    function getSealCreateUrl($accessToken, GetSealCreateUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_CREATE_GET_URL);
    }

    # 查询印章列表
    function getSealList($accessToken, GetSealListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_GET_LIST);
    }

    # 查询印章详情
    function getSealDetail($accessToken, GetSealDetailReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_GET_DETAIL);
    }

    # 获取指定印章详情链接
    function getAppointedSealUrl($accessToken, GetAppointedSealUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_MANAGE_GET_APPOINTED_SEAL_URL);
    }

    # 查询企业用印员列表
    function getSealUserList($accessToken, GetSealUserListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_GET_USER_LIST);
    }

    # 查询指定成员的印章列表
    function getAppointedUserSealList($accessToken, GetAppointedUserSealListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_USER_GET_LIST);
    }

    # 查询审核中的印章列表
    function getVerifySealList($accessToken, GetVerifySealListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_VERIFY_GET_LIST);
    }

    # 修改印章基本信息
    function sealModify($accessToken, SealModifyReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_MODIFY);
    }

    # 获取设置用印员链接
    function getSealGrantUrl($accessToken, GetSealGrantUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_GRANT_GET_URL);
    }

    # 解除印章授权
    function sealGrantCancel($accessToken, SealGrantCancelReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_GRANT_CANCEL);
    }

    # 设置印章状态
    function sealSetStatus($accessToken, SealSetStatusReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_SET_STATUS);
    }

    # 删除印章
    function sealDelete($accessToken, SealDeleteReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_DELETE);
    }

    # 查询印章标签列表
    function getSealTagList($accessToken, GetSealTagListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SEAL_TAG_GET_LIST);
    }

    # 创建模板签名
    function createPersonalSealByTemplate($accessToken, CreatePersonalSealByTemplateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::PERSONAL_SEAL_CREATE_BY_TEMPLATE);
    }

    # 创建图片签名
    function createPersonalSealByImage($accessToken, CreatePersonalSealByImageReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::PERSONAL_SEAL_CREATE_BY_IMAGE);
    }

    # 查询个人签名列表
    function getPersonalSealList($accessToken, GetPersonalSealListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::PERSONAL_SEAL_GET_LIST);
    }

    # 获取设置个人签名免验证签链接
    function getPersonalSealFreeSignUrl($accessToken, GetPersonalSealFreeSignUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::PERSONAL_SEAL_FREE_SIGN_GET_URL);
    }

    # 解除印章免验证签
    function cancelSealFreeSign($accessToken, CancelSealFreeSignReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CANCEL_SEAL_FREE_SIGN);
    }

    # 解除签名免验证签
    function cancelPersonalSealFreeSign($accessToken, CancelPersonalSealFreeSignReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CANCEL_PERSONAL_SEAL_FREE_SIGN);
    }

    # 解除签名免验证签
    function getPersonalSealManageUrl($accessToken, GetPersonalSealManageUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::PERSONAL_SEAL_GET_MANAGE_URL);
    }

    # 解除签名免验证签
    function getPersonalSealCreateUrl($accessToken, GetPersonalSealCreateUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::PERSONAL_SEAL_GET_CREATE_URL);
    }

    # 解除签名免验证签
    function deletePersonalSeal($accessToken, PersonalSealDeleteReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::PERSONAL_SEAL_DELETE);
    }

}
