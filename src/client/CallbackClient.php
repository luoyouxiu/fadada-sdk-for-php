<?php
namespace LuoYouXiu\FadadaSdkForPhp\Client;
use LuoYouXiu\FadadaSdkForPhp\Bean\req\callback\GetCallBackListReq;
use LuoYouXiu\FadadaSdkForPhp\Constants\OpenApiUrlConstants;
use LuoYouXiu\FadadaSdkForPhp\Client\IClient;

class CallbackClient
{
    private $client;

    public function __construct(IClient $client)
    {
        $this->client = $client;
    }

    # 查询回调列表
    function getCallbackList($accessToken, GetCallBackListReq $req)
    {
        return $this->client->request($accessToken, json_encode($req, JSON_FORCE_OBJECT), OpenApiUrlConstants::GET_CALL_BACK_LIST);
    }

}
