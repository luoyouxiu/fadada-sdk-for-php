<?php

namespace LuoYouXiu\FadadaSdkForPhp\Client;

use LuoYouXiu\FadadaSdkForPhp\Bean\req\archives\ArchivesCatalogListReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\archives\ArchivesContactArchivedReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\archives\ArchivesPerformanceDeleteReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\archives\ArchivesPerformanceListReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\archives\ArchivesPerformanceModifyReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\archives\GetArchivedDetailReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\archives\GetArchivedListReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\archives\GetArchivesManageUrlReq;

use LuoYouXiu\FadadaSdkForPhp\Client\IClient;
use LuoYouXiu\FadadaSdkForPhp\Constants\OpenApiUrlConstants;



class ArchivesPerformanceClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 获取合同归档链接
    function getArchivesManageUrl($accessToken, GetArchivesManageUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::ARCHIVES_GET_ARCHIVES_URL);
    }

    # 合同归档
    function archivesContactArchived($accessToken, ArchivesContactArchivedReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::ARCHIVES_CONTACT_ARCHIVED);
    }

    # 查询已归档合同列表
    function getArchivedList($accessToken, GetArchivedListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::ARCHIVES_GET_ARCHIVED_LIST);
    }

    # 查询已归档合同详情
    function getArchivedDetail($accessToken, GetArchivedDetailReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::ARCHIVES_GET_ARCHIVED_DETAIL);
    }

    # 查询归档文件夹列表
    function archivesCatalogList($accessToken, ArchivesCatalogListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::ARCHIVES_CATALOG_LIST);
    }

    # 创建合同履约提醒
    function archivesPerformanceModify($accessToken, ArchivesPerformanceModifyReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::ARCHIVES_PERFORMANCE_MODIFY);
    }

    # 删除合同履约提醒
    function archivesPerformanceDelete($accessToken, ArchivesPerformanceDeleteReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::ARCHIVES_PERFORMANCE_DELETE);
    }

    # 查询合同履约提醒列表
    function archivesPerformanceList($accessToken, ArchivesPerformanceListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::ARCHIVES_PERFORMANCE_LIST);
    }

}
