<?php
namespace Lyx\FadadaSdkForPhp\Client;
use Lyx\FadadaSdkForPhp\Bean\req\template\corpField\GetCorpFieldListReq;
use Lyx\FadadaSdkForPhp\Bean\req\template\docTemplate\FillValueDocTemplateReq;
use Lyx\FadadaSdkForPhp\Bean\req\template\docTemplate\GetDocTemplateListReq;
use Lyx\FadadaSdkForPhp\Bean\req\template\signTemplate\GetSignTemplateListReq;
use Lyx\FadadaSdkForPhp\Bean\req\template\corpField\CreateCorpFieldReq;
use Lyx\FadadaSdkForPhp\Bean\req\template\corpField\DeleteCorpFieldReq;
use Lyx\FadadaSdkForPhp\Bean\req\template\docTemplate\CopyCreateDocTemplateReq;
use Lyx\FadadaSdkForPhp\Bean\req\template\docTemplate\CreateDocTemplateReq;
use Lyx\FadadaSdkForPhp\Bean\req\template\docTemplate\DeleteDocTemplateReq;
use Lyx\FadadaSdkForPhp\Bean\req\template\docTemplate\DocTemplateDetailReq;
use Lyx\FadadaSdkForPhp\Bean\req\template\docTemplate\SetDocTemplateStatusReq;
use Lyx\FadadaSdkForPhp\Bean\req\template\signTemplate\DeleteSignTemplateReq;
use Lyx\FadadaSdkForPhp\Bean\req\template\signTemplate\SetSignTemplateStatusReq;
use Lyx\FadadaSdkForPhp\Bean\req\template\signTemplate\SignTemplateDetailReq;
use Lyx\FadadaSdkForPhp\Bean\req\template\TemplateCreateGetUrl;
use Lyx\FadadaSdkForPhp\Bean\req\template\TemplateEditGetUrl;
use Lyx\FadadaSdkForPhp\Bean\req\template\TemplateManageGetUrl;
use Lyx\FadadaSdkForPhp\Bean\req\template\TemplatePreviewGetUrl;
use Lyx\FadadaSdkForPhp\Constants\OpenApiUrlConstants;

require_once 'Fdd.Sdk.IClient.php';
require_once '../constants/OpenApiUrlConstants.php';

class TemplateClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 查询文档模板列表
    function getDocTemplateList($accessToken, GetDocTemplateListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::DOC_TEMPLATE_GET_LIST);
    }

    # 获取文档模板详情
    function getDocTemplateDetail($accessToken, DocTemplateDetailReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::DOC_TEMPLATE_GET_DETAIL);
    }

    # 创建文档模板
    function createDocTemplate($accessToken, CreateDocTemplateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::DOC_TEMPLATE_CREATE);
    }

    # 复制新增文档模板
    function copyCreateDocTemplate($accessToken, CopyCreateDocTemplateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::DOC_TEMPLATE_COPY_CREATE);
    }

    # 填写文档模板生成文件
    function fillValueDocTemplate($accessToken, FillValueDocTemplateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::DOC_TEMPLATE_FILL_VALUES);
    }

    # 启用/停用文档模板
    function setDocTemplateStatus($accessToken, SetDocTemplateStatusReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SET_DOC_TEMPLATE_STATUS);
    }

    # 删除文档模板
    function deleteDocTemplate($accessToken, DeleteDocTemplateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::DELETE_DOC_TEMPLATE);
    }

    # 启用/停用签署模板
    function setSignTemplateStatus($accessToken, SetSignTemplateStatusReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SET_SIGN_TEMPLATE_STATUS);
    }

    # 签署模板删除
    function deleteSignTemplate($accessToken, DeleteSignTemplateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::DELETE_SIGN_TEMPLATE);
    }

    # 查询签署模板列表
    function getSignTemplateList($accessToken, GetSignTemplateListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TEMPLATE_GET_LIST);
    }

    # 获取签署模板详情
    function getSignTemplateDetail($accessToken, SignTemplateDetailReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TEMPLATE_GET_DETAIL);
    }

    # 获取模板新增链接
    function templateCreateGetUrl($accessToken, TemplateCreateGetUrl $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::TEMPLATE_CREATE_GET_URL);
    }

    # 获取模板编辑链接
    function templateEditGetUrl($accessToken, TemplateEditGetUrl $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::TEMPLATE_EDIT_GET_URL);
    }

    # 获取模板预览链接
    function templatePreviewGetUrl($accessToken, TemplatePreviewGetUrl $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::TEMPLATE_PREVIEW_GET_URL);
    }

    # 获取模板管理链接
    function templateManageGetUrl($accessToken, TemplateManageGetUrl $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::TEMPLATE_MANAGE_GET_URL);
    }

    # 查询自定义控件列表
    function getCorpFieldList($accessToken, GetCorpFieldListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::CORP_FIELD_GET_LIST);
    }

    # 创建自定义控件
    function createCorpField($accessToken, CreateCorpFieldReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CORP_FIELD_CREATE);
    }

    # 删除自定义控件
    function deleteCorpField($accessToken, DeleteCorpFieldReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::CORP_FIELD_DELETE);
    }
}
