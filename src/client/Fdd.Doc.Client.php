<?php
namespace LuoYouXiu\FadadaSdkForPhp\Client;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\doc\FileGetKeywordPositionsReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\doc\FileGetUploadUrlReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\doc\FileProcessReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\doc\FileUploadByUrlReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\doc\FileVerifySignReq;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\doc\OfdFileMergeReq;
use LuoYouXiu\FadadaSdkForPhp\Constants\OpenApiUrlConstants;

require_once 'Fdd.Sdk.IClient.php';
require_once '../constants/OpenApiUrlConstants.php';

class DocClient
{

    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 通过网络文件地址上传
    function fileUploadByUrl($accessToken, FileUploadByUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::FILE_UPLOAD_BY_URL);
    }

    # 获取上传文件地址
    function fileGetUploadUrl($accessToken, FileGetUploadUrlReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::FILE_GET_UPLOAD_URL);
    }

    # PUT请求上传本地文件
    function fileUploadByLocal($url, $filePath)
    {
        return $this->client->request_file($url, $filePath);
    }

    # 文件处理
    function fileProcess($accessToken, FileProcessReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::FILE_PROCESS);
    }

    # OFD文件追加
    function ofdFileMerge($accessToken, OfdFileMergeReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::FILE_OFD_FILE_MERGE);
    }

    # 查询文档关键字坐标
    function fileGetKeywordPositions($accessToken, FileGetKeywordPositionsReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::FILE_GET_KEYWORD_POSITIONS);
    }

    # 文档验签
    function fileVerifySign($accessToken, FileVerifySignReq $req)
    {
        return $this->client->request($accessToken, json_encode($req), OpenApiUrlConstants::FILE_VERIFY_SIGN);
    }

}
