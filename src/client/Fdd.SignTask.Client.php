<?php
namespace Lyx\FadadaSdkForPhp\Client;
use Lyx\FadadaSdkForPhp\Bean\req\signTask\AddActorsReq;
use Lyx\FadadaSdkForPhp\Bean\req\signTask\AddAttachReq;
use Lyx\FadadaSdkForPhp\Bean\req\signTask\AddDocsReq;
use Lyx\FadadaSdkForPhp\Bean\req\signTask\AddFieldReq;
use Lyx\FadadaSdkForPhp\Bean\req\signTask\CreateSignTaskReq;
use Lyx\FadadaSdkForPhp\Bean\req\signTask\CreateWithTemplateReq;
use Lyx\FadadaSdkForPhp\Bean\req\signTask\DeleteAttachReq;
use Lyx\FadadaSdkForPhp\Bean\req\signTask\DeleteDocsReq;
use Lyx\FadadaSdkForPhp\Bean\req\signTask\DeleteFieldReq;
use Lyx\FadadaSdkForPhp\Bean\req\signTask\FillFieldValuesReq;
use Lyx\FadadaSdkForPhp\Bean\req\signTask\SignTaskBaseReq;
use Lyx\FadadaSdkForPhp\Constants\OpenApiUrlConstants;

require_once 'Fdd.Sdk.IClient.php';
require_once '../constants/OpenApiUrlConstants.php';

/**
 * Class SignTaskClient
 * 签署任务管理
 */

class SignTaskClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 创建签署任务(基于文档)
    function create($accessToken, CreateSignTaskReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_CREATE);
    }

    # 创建签署任务(基于签署模板)
    function createWithTemplate($accessToken, CreateWithTemplateReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_CREATE_WITH_TEMPLATE);
    }

    # 填写签署任务控件内容
    function fillFieldsValue($accessToken, FillFieldValuesReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_FILL_FIELDS_VALUE);
    }

    # 提交签署任务
    function start($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_START);
    }

    # 添加签署任务文档
    function addDocs($accessToken, AddDocsReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ADD_DOCS);
    }

    # 移除签署任务文档
    function deleteDocs($accessToken, DeleteDocsReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_DELETE_DOCS);
    }

    # 添加签署任务控件
    function addFields($accessToken, AddFieldReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ADD_FIELD);
    }

    # 移除签署任务控件
    function deleteFields($accessToken, DeleteFieldReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_DELETE_FIELD);
    }

    # 添加签署任务附件
    function addAttachs($accessToken, AddAttachReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ADD_ATTACH);
    }

    # 移除签署任务附件
    function deleteAttachs($accessToken, DeleteAttachReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_DELETE_ATTACH);
    }

    # 添加签署任务参与方
    function addActors($accessToken, AddActorsReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ADD_ACTOR);
    }

    # 移除签署任务参与方
    function deleteActors($accessToken, DeleteActorReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_DELETE_ACTOR);
    }

    # 修改签署任务参与方
    function modifyActors($accessToken, ModifyActorReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ACTOR_MODIFY);
    }

    # 获取签署任务编辑链接
    function getEditUrl($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_GET_EDIT_URL);
    }

    # 获取签署任务预览链接
    function getPreviewUrl($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_GET_PREVIEW_URL);
    }

    # 获取签署任务预填写链接
    function getPrefillUrl($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_GET_PREFILL_URL);
    }

    # 获取签署任务参与方专属链接
    function actorGetUrl($accessToken, ActorGetUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ACTOR_GET_URL);
    }

    # 获取签署任务批量签署链接
    function getBatchSignUrl($accessToken, GetBatchSignUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_GET_BATCH_SIGN_URL);
    }

    # 获取参与方签署链接（API3.0任务专属）
    function signTaskActorV3GetUrl($accessToken, GetV3ActorSignTaskUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ACTOR_V3_GET_URL);
    }

    # 查询签署任务列表
    function getOwnerList($accessToken, SignTaskOwnerListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_OWNER_GET_LIST);
    }

    # 查询签署任务详情
    function getAppDetail($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_APP_GET_DETAIL);
    }

    # 查询参与方身份信息
    function getActorList($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_ACTOR_GET_LIST);
    }

    # 查询签署任务控件信息
    function getFieldList($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_FIELD_GET_LIST);
    }

    # 查询签署任务审批信息
    function getApprovalInfo($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_APPROVAL_GET_INFO);
    }

    # 查询企业签署任务文件夹
    function getCatalogList($accessToken, SignTaskCatalogListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_CATALOG_LIST);
    }

    # 查询签署业务类型列表
    function getBusinessTypeList($accessToken, BusinessTypeListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_BUSINESS_TYPE_GET_LIST);
    }

    # 查询签署完成的文件
    function signTaskGetFile($accessToken, SignTaskGetFileReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_OWNER_GET_FILE);
    }

    # 查询参与方证书文件
    function getActorCerInfo($accessToken, GetActorCerInfoReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_ACTOR_GET_CER_INFO);
    }

    # 获取签署文档下载地址
    function getOwnerDownloadUrl($accessToken, DownloadFilesReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_OWNER_GET_DOWNLOAD_URL);
    }

    # 签署文档切图
    function getSignTaskOwnerSlicingTicketId($accessToken, GetSignTaskSlicingDocReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::GET_SIGN_TASK_OWNER_SLICING_TICKET_ID);
    }

    # 获取图片版签署文档下载地址
    function getSignTaskOwnerPicDownloadUrl($accessToken, GetSignTaskPicDocTicketReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::GET_SIGN_TASK_OWNER_PIC_DOWNLOAD_URL);
    }

    # 获取签署任务参与方刷脸底图
    function getFacePicture($accessToken, GetFacePictureReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_ACTOR_GET_FACE_PICTURE);
    }

    # 获取参与方签署音视频
    function getActorAudioVideo($accessToken, GetActorAudioVideoReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ACTOR_GET_AUDIO_VIDEO_DOWNLOAD_URL);
    }

    # 申请证据报告
    function applyReport($accessToken, SignTaskApplyReportReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_APPLY_REPORT);
    }

    # 下载证据报告
    function downloadReport($accessToken, SignTaskDownloadReportReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_DOWNLOAD_REPORT);
    }

    # 获取签署任务公证处保全报告（旧,已下架）
    function getEvidenceReportDownloadUrl($accessToken, EvidenceReportDownloadUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::SIGN_TASK_EVIDENCE_REPORT_GET_DOWNLOAD_URL);
    }

    # 驳回填写签署任务
    function signTaskIgnore($accessToken, SignTaskIgnoreReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_IGNORE);
    }

    # 定稿签署任务文档
    function finalizeDoc($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_DOC_FINALIZE);
    }

    # 催办签署任务
    function urge($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_URGE);
    }

    # 撤销签署任务
    function cancel($accessToken, SignTaskCancelReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_CANCEL);
    }

    # 阻塞签署任务
    function block($accessToken, BlockReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_BLOCK);
    }

    # 解阻签署任务
    function unblock($accessToken, UnblockReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_UNBLOCK);
    }

    # 结束签署任务
    function finish($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_FINISH);
    }

    # 作废签署任务
    function abolishSignTask($accessToken, AbolishSignTaskReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_ABOLISH);
    }

    # 删除签署任务
    function delete($accessToken, SignTaskBaseReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_DELETE);
    }

    # 延期签署任务
    function extension($accessToken, ExtensionSignTaskReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::SIGN_TASK_EXTENSION);
    }
}

