<?php
namespace LuoYouXiu\FadadaSdkForPhp\Client;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\approval\GetApprovalDetailReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\approval\GetApprovalFlowDetailReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\approval\GetApprovalFlowListReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\approval\GetApprovalInfoListReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\approval\GetApprovalUrlReq;
use LuoYouXiu\FadadaSdkForPhp\Constants\OpenApiUrlConstants;

require_once 'Fdd.Sdk.IClient.php';
require_once '../constants/OpenApiUrlConstants.php';

class ApprovalClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 查询审批流程列表
    function approvalFlowList($accessToken, GetApprovalFlowListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APPROVAL_FLOW_LIST);
    }

    # 查询审批流程详情
    function approvalFlowDetail($accessToken, GetApprovalFlowDetailReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APPROVAL_FLOW_DETAIL);
    }

    # 查询审批列表
    function approvalList($accessToken, GetApprovalInfoListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APPROVAL_LIST);
    }

    # 查询审批详情
    function approvalDetail($accessToken, GetApprovalDetailReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APPROVAL_DETAIL);
    }

    # 获取审批链接
    function approvalUrl($accessToken, GetApprovalUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::APPROVAL_URL);
    }

}
