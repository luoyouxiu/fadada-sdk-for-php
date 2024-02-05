<?php

namespace LuoYouXiu\FadadaSdkForPhp\Client;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\draft\DocFinalizeReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\draft\DraftCreateReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\draft\GetEditUrlReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\draft\GetFinishedFileReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\draft\GetInviteUrlReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\draft\GetManageUrlReq;
use LuoYouXiu\FadadaSdkForPhp\Constants\OpenApiUrlConstants;

use LuoYouXiu\FadadaSdkForPhp\Client\IClient;


class DraftClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 发起合同协商
    function draftCreate($accessToken, DraftCreateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::DRAFT_CREATE);
    }

    # 获取合同协商邀请链接
    function getDraftInviteUrl($accessToken, GetInviteUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::DRAFT_GET_INVITE_URL);
    }

    # 获取合同协商编辑链接
    function getDraftEditUrl($accessToken, GetEditUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::DRAFT_GET_EDIT_URL);
    }

    # 获取合同起草管理链接
    function getDraftManageUrl($accessToken,GetManageUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::DRAFT_GET_MANAGE_URL);
    }

    # 合同协商文件定稿
    function draftDocFinalize($accessToken,DocFinalizeReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::DRAFT_DOC_FINALIZE);
    }

    # 查询已定稿的合同文件
    function getDraftFinishedFile($accessToken,GetFinishedFileReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::DRAFT_GET_FINISHED_FILE);
    }
}
