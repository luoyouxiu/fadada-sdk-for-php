<?php
namespace LuoYouXiu\FadadaSdkForPhp\Client;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\CorpChangeIdentityInfoReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\CorpOrganizationManageReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\counterpart\CounterpartListReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\department\DeptCreateReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\department\DeptDeleteReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\department\DeptGetDetailReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\department\DeptGetListReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\department\DeptModifyReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\GetCorpEntityListReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\GetCorpEntityManageUrlReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\member\MemberSetStatusReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\member\MemberCreateReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\member\MemberDeleteReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\member\MemberGetActiveUrlReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\member\MemberGetDetailReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\member\MemberGetListReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\member\MemberModifyReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\org\member\MemberSetDeptReq;
use LuoYouXiu\FadadaSdkForPhp\Constants\OpenApiUrlConstants;

require_once 'Fdd.Sdk.IClient.php';
require_once '../constants/OpenApiUrlConstants.php';

class OrgClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 获取组织管理链接
    function getCorpOrganizationManageUrl($accessToken, CorpOrganizationManageReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_ORGANIZATION_MANAGE_GET_URL);
    }

    # 获取成员企业管理链接
    function getCorpEntityManageUrl($accessToken, GetCorpEntityManageUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_ENTITY_GET_MANAGE_URL);
    }

    # 查询企业主体列表
    function getCorpEntityList($accessToken, GetCorpEntityListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_ENTITY_GET_LIST);
    }

    # 获取企业工商信息变更链接
    function corpChangeIdentityInfo($accessToken, CorpChangeIdentityInfoReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_CHANGE_IDENTITY_INFO);
    }

    # 创建部门
    function deptCreate($accessToken, DeptCreateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_DEPT_CREATE);
    }

    # 查询部门列表
    function deptGetList($accessToken, DeptGetListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_DEPT_GET_LIST);
    }

    # 查询部门详情
    function deptGetDetail($accessToken, DeptGetDetailReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_DEPT_GET_DETAIL);
    }

    # 修改部门基本信息
    function deptModify($accessToken, DeptModifyReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_DEPT_MODIFY);
    }

    # 删除部门
    function deptDelete($accessToken, DeptDeleteReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_DEPT_DELETE);
    }

    # 创建成员
    function memberCreate($accessToken, MemberCreateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CORP_MEMBER_CREATE);
    }

    # 获取成员激活链接
    function memberGetActiveUrl($accessToken, MemberGetActiveUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CORP_MEMBER_GET_ACTIVE_URL);
    }

    # 查询企业成员列表
    function getCorpMemberList($accessToken, MemberGetListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_MEMBER_GET_LIST);
    }

    # 查询成员详情
    function memberGetDetail($accessToken, MemberGetDetailReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_MEMBER_GET_DETAIL);
    }

    # 修改成员基本信息
    function memberModify($accessToken, MemberModifyReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CORP_MEMBER_MODIFY);
    }

    # 设置成员所属部门
    function memberSetDept($accessToken, MemberSetDeptReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CORP_MEMBER_SET_DEPT);
    }

    # 设置成员状态
    function memberSetStatus($accessToken, MemberSetStatusReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CORP_MEMBER_SET_STATUS);
    }

    # 删除成员
    function memberDelete($accessToken, MemberDeleteReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CORP_MEMBER_DELETE);
    }

    # 查询相对方列表
    function counterpartList($accessToken, CounterpartListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::COUNTERPART_GET_LIST);
    }
}
